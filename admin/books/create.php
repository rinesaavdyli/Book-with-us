<?php
include ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/admin/Components/header.php');
?>
<main>
<section class="block_section">
	<div class="row">
		<div class="d-flex">
			<a href="index.php" class="button-type">Back</a>
		</div>
		<table>
			<caption><h1 class="table-title">Create new Book</h1></caption>
			<thead>
				<tr>
					<th>ISBN</th>
					<th>Title</th>
					<th>Author</th>
					<th>Genre</th>
				</tr>
				</thead>
			<tbody>
				<form action="./lib/insert.php" method="post" enctype="multipart/form-data">
				<tr>
					<td><input type="text" name="isbn" placeholder="ISBN"></td>
					<td><input type="text" name="title" placeholder="Title"></td>
					<td><input type="text" name="author" placeholder="Author"></td>
					<td><input type="text" name="genre" placeholder="Genre"></td>
				</tr>
				<tr>
				<thead>
					<th>Description</th>
					<th>Image</th>
					<th>Likes</th>
					<th>Options</th>
					</thead>
				</tr>
				<tr>
					<td><textarea name="description" placeholder="Description"></textarea></td>
					<td><input type="file" name="image"placeholder="Image" ></td>
					<td><input type="text" name="likes" placeholder="Likes"></td>
					<td><input type="submit" value="Submit"></td>
				</tr>
				</form>
		    </tbody> 
		</table>		
	</div>

</section>
</main>