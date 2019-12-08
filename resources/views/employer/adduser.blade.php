<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Add User</h1>
	<a href="/home">Back</a> | 
	<a href="/logout">logout</a> |
	<a href="/employer/add">Add User</a>
	
	<form method="post">
	{{csrf_field()}}
	<table border="1">
	<tr>
			<td>NAME</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="username"></td>
		</tr>
	
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Save"></td>
			<td></td>
		</tr>
	</table>
</form>

</body>
</html>