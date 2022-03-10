<?php
	include ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/admin/Components/header.php');
	require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/view/booksviewer.php');
?>
<section class="block_section">
	<div class="row">
		<a href="create.php" class="button-create">Add new Book</a>
		<table>
			<caption><h1 class="table-title">Books</h1></caption>
			<thead>
				<tr>
					<th>Id</th>
					<th>ISBN</th>
					<th>Title</th>
					<th>Author</th>
					<th>Genre</th>
					<th>Description</th>
					<th>Image</th>
					<th>Likes</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$book = new BooksView();
				$books = $book->showBooks(); 
			?>
			<?php foreach ($books as $book): ?>
				<tr>
					<td><?php echo $book['Libri_ID']; ?></td>
					<td><?php echo $book['ISBN']; ?></td>
					<td><?php echo $book['Title']; ?></td>
					<td><?php echo $book['Author']; ?></td>
					<td><?php echo $book['Genre']; ?></td>
					<td><?php echo $book['Description']; ?></td>
					<?php if ($book['Image']): ?>
						<td><img src="<?php echo $book['Image']; ?>" width="100" height="100"></td>
					<?php else: ?>
						<td>No image Selected</td>
					<?php endif?>
					<td><?php echo $book['Likes']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $book['Libri_ID']; ?>" style="color:green;">
							<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
						</a>
						<a href="lib/delete.php?id=<?php echo $book['Libri_ID']; ?>" style="color:red;">
							<i class="fa fa-times fa-2x" aria-hidden="true"></i>
						</a>
					</td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>