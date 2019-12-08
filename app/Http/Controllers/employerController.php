<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class employerController extends Controller
{
    function index(Request $request){

        //$users = User::all();
		$users = DB::table('users')->get(); 
        
        if($request->session()->has('name')){
    		   	return view('employer.index')->with('users', $users);
    	}else{
    		return redirect()->route('login.index');
    	}        
 
    }
    function add(){

        return view('employer.adduser');
    }

    function insert(Request $req){

        $user = new User();
        $user->name = $req->name;
        $user->username = $req->username;
        $user->password = $req->password;
        
    
    
        if($user->save()){
            return redirect()->route('employer.index');
        }else{
            return redirect()->route('employer.add');
        }
    }
    function edit($id){
        $user = User::find($id);
    	return view('employer.edit')->with('user', $user);

    }
    function update(Request $req, $id){

        $user = User::find($id);
        $user->name =  $req->username;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->save();

    	return redirect()->route('employer.index');
    }
    function delete($id){

        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('employer.index');
    }

    


}
