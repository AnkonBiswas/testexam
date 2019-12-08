<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/employer', ['uses'=>'employerController@index']);
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/employer/userList', ['as'=>'employer.index','uses'=>'employerController@index']);
Route::get('/employer/add', 'employerController@add')->name('employer.add');
Route::post('/employer/add', 'employerController@insert');
Route::get('/employer/details/{id}', 'employerController@details')->name('employer.details');
Route::get('/employer/edit/{id}', 'employerController@edit')->name('employer.edit');
Route::post('/employer/edit/{id}', 'employerController@update')->name('employer.update');
Route::get('/student/delete/{id}', 'employerController@delete')->name('employer.delete');
Route::post('/student/delete/{id}', 'employerController@destroy')->name('employer.destroy');


