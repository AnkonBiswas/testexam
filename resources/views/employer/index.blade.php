<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>User List</h1>
	<a href="/employer">Back</a> | 
	<a href="/logout">logout</a> |
	<a href="/employer/add">Add User</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>PASSWORD</td>
			<td>ACTION</td>
		</tr>

	 @foreach($users as $s)
		<tr>
			<td>{{$s->id}}</td>
			<td>{{$s->username}}</td>
			
			<td>{{$s->password}}</td>
			<td>
				<a href="{{route('employer.edit', $s->id)}}">Edit</a> | 
				<a href="{{route('employer.delete', $s->id)}}">Delete</a> | 
				<a href="{{route('employer.details', $s->id)}}">Details</a>
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>