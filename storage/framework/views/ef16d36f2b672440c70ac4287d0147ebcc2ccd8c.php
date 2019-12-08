  
<!DOCTYPE html>
<html>
<head>
	<title>Employer Edit</title>
</head>
<body>
	<h1>Edit Employer</h1>

	<a href="<?php echo e(route('employer.index')); ?>">Back</a> |

<br><br>

<form method="post">
	<table border="0">
	<tr>
			<td>name</td>
			<td><input type="text" name="name" value="<?php echo e($user['name']); ?>"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="<?php echo e($user['username']); ?>"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value="<?php echo e($user['password']); ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>
</body>
</html>