<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/admin/Components/header.php');
	require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/view/usersview.php');
	function limit($value, $limit = 100, $end = '...')
{
	if (strlen($value) <= $limit) return $value;
	return substr($value, 0, $limit).$end;
}
?>
<section class="block_section">
	<div class="row">
		<a href="create.php" class="button-create">Create new User</a>
		<table>
			<caption><h1 class="table-title">Users</h1></caption>
			<thead>
				<tr>
					<th>Id</th>
					<th>Username</th>
					<th>Email</th>
					<th>Password</th>
					<th>Role</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$user = new UsersView();
				$users = $user->showAllUsers(); 
			?>
			<?php foreach ($users as $user): ?>
				<tr>
					<td><?php echo $user['User_ID']; ?></td>
					<td><?php echo $user['Username']; ?></td>
					<td><?php echo $user['Email']; ?></td>
					<td><?php echo limit($user['Password'], 20); ?></td>
					<td><?php echo $user['Role']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $user['User_ID']; ?>" style="color:green;">
							<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
						</a>
						<a href="lib/delete.php?id=<?php echo $user['User_ID']; ?>" style="color:red;">
							<i class="fa fa-times fa-2x" aria-hidden="true"></i>
						</a>
					</td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
</section>