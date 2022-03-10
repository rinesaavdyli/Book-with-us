<?php 
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/admin/Components/header.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/view/aboutviewer.php');
?>

<?php 	$id = isset($_GET['id']) ? $_GET['id'] : null;
	$about = new AboutUsView;
	$aboutus = $about->showAbout($id);
	$aboutus['Title']='';
	$aboutus['Description']='';
?>
<section class="block_section">
	<div class="row">
		<div class="d-flex">
			<a href="index.php" class="button-type">Back</a>
			<?php 
				if(!$aboutus){
					echo '<h1 class="h1">AboutUs with ID: ' . $id . ' doesn\'t exist!</h1>';
				}
			?>
		</div>
		<?php if ($aboutus): ?>
			<table>
				<caption><h1 class="table-title">Edit About Us</h1></caption>
				<thead>
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Description</th>
						<th>Image</th>
						<th>Options</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<form action="lib/update.php" method="post" enctype="multipart/form-data">
						<td><?php echo $id ?></td>
						<td><input type="text" name="title" placeholder="Title" value="<?php echo $aboutus['Title'];?>"></td>
						<td><textarea name="description" placeholder="Description"><?php echo $aboutus['Description']?> </textarea></td>
						<?php if(!empty($aboutus['Image'])): ?>
							<td><p><?php echo substr($aboutus['Image'], 14, 29); ?></p><input type="file" name="image"></td>
						<?php else: ?>
							<td><p><?php echo 'No image for this service'; ?></p><input type="file" name="image"></td>
						<?php endif ?>
						<input type="hidden" name="id" value="<?php echo $id;?>">
						<input type="hidden" name="delete_file" value="<?php echo $aboutus['Image'] ?>">
						<td><input type="submit" value="Submit"></td>
					</form>
				</tr>
				</tbody>
			</table>
		<?php endif ?>
	</div>
</section>
