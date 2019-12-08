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

	 <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($s->id); ?></td>
			<td><?php echo e($s->username); ?></td>
			
			<td><?php echo e($s->password); ?></td>
			<td>
				<a href="<?php echo e(route('employer.edit', $s->id)); ?>">Edit</a> | 
				<a href="<?php echo e(route('employer.delete', $s->id)); ?>">Delete</a> | 
				<a href="<?php echo e(route('employer.details', $s->id)); ?>">Details</a>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

</body>
</html>