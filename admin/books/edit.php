<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/admin/Components/header.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/view/booksviewer.php');
?>
<?php 
	$id = isset($_GET['id']) ? $_GET['id'] : null;
	$books = new BooksView();
	$book = $books->showBook($id);
?>
<section class="block_section">
	<div class="row">
		<div class="d-flex">
			<a href="index.php" class="button-type">Back</a>
			<?php 
				if(!$book){
					echo '<h1 class="h1">Room with ID: ' . $id . ' doesn\'t exist!</h1>';
				}
			?>
		</div>
		<?php if ($book): ?>
			<table>
				<caption><h1 class="table-title">Edit Books</h1></caption>
				<thead>
					<tr>
					<th>Id</th>
					<th>ISBN</th>
					<th>Title</th>
					<th>Author</th>
					<th>Genre</th>
				</thead>
				<tbody>
					<form action="lib/update.php" method="post" enctype="multipart/form-data">
					<tr>
						<td><?php echo $id ?></td>
						<td><input type="text" name="isbn" placeholder="ISBN" value="<?php echo $book['ISBN'];?>"></td>
						<td><input type="text" name="title" placeholder="Title" value="<?php echo $book['Title'];?>"></td>
						<td><input type="text" name="author" placeholder="Author" value="<?php echo $book['Author'];?>"></td>
						<td><input type="text" name="genre" placeholder="Genre" value="<?php echo $book['Genre'];?>"></td>
					</tr>
					<tr>
					<thead>
				<tr>
					<th>Description</th>
					<th>Image</th>
					<th>Likes</th>
					<th>Options</th>
					</tr>
				</thead>
					</tr>
					<tr>
					<tr>
						<td><textarea name="description"><?php echo $book['Description']?> </textarea></td>
						<?php if(!empty($book['Image'])): ?>
							<td><p><?php echo substr($book['Image'], 14, 29); ?></p><input type="file" name="image"></td>
						<?php else: ?>
							<td><p><?php echo 'No image for this service'; ?></p><input type="file" name="image"></td>
						<?php endif ?>
						<td><input type="text" name="likes" placeholder="Likes" value="<?php echo $book['Likes'];?>"></td>
						<input type="hidden" name="id" value="<?php echo $id;?>">
						<input type="hidden" name="delete_file" value="<?php echo $book['Image'] ?>">
						<td><input type="submit" value="Submit"></td>
					</tr>
				</tr>
					</form>
				</tbody>
			</table>
	</div>	

		<?php endif ?>
	</div>
</section>