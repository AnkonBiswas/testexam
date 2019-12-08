<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! <?php echo e(session('name')); ?></h1>

	<a href="<?php echo e(route('employer.add')); ?>">Add user</a> | 
	<a href="<?php echo e(route('employer.index')); ?>">UserList</a> | 
	<a href="/logout">logout</a>

	<table>
		<tr>
			<td>Name :</td>
			<td><?php echo e($name); ?> </td>
		</tr>
		<tr>
			<td>ID :</td>
			<td><?php echo e($id); ?></td>
		</tr>
		<tr>
			<td>CGPA :</td>
			<td><?php echo e($cgpa); ?></td>
		</tr>
	</table>

</body>
</html>