<?php
include ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/admin/Components/header.php');
?>
<section class="block_section">
	<div class="row">
		<div class="d-flex">
			<a href="index.php" class="button-type">Back</a>
		</div>
		<table>
			<caption><h1 class="table-title">Create new User</h1></caption>
			<thead>
				<tr>
					<th>Username</th>
					<th>Email</th>
					<th>Password</th>
					<th>Role</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<form action="lib/insert.php" method="post" enctype="multipart/form-data">
					<td><input type="text" name="username" placeholder="Username"></td>
					<td><input type="text" name="email" placeholder="Email"></td>
					<td><input type="password" name="password" placeholder="Password" ></td>
					<td><input type="text" name="role" placeholder="Role" ></td>
					<td><input type="submit" value="Submit"></td>
				</form>
			</tr>
			</tbody>
		</table>
	</div>
</section>