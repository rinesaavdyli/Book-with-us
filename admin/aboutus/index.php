<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/view/aboutviewer.php');
include ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/admin/Components/header.php');

?>
<section class="block_section">
	<div class="row">
		<a href="create.php" class="button-create">Create new About us</a>
		<table>
			<caption><h1 class="table-title">About us</h1></caption>
			<thead>
				<tr>
					<th>Id</th>
					<th>Title</th>
					<th>Image</th>
					<th>Description</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$about = new AboutUsView;
				$aboutus = $about->showAboutus(); 
			?>
			<?php foreach ($aboutus as $about): ?>
				<tr>
					<td><?php echo $about['AboutUs_ID']; ?></td>
					<td><?php echo $about['Title']; ?></td>
					<?php if ($about['Image']): ?>
						<td><img src="<?php echo $about['Image']; ?>" width="100" height="100"></td>
					<?php else: ?>
						<td>No image Selected</td>
					<?php endif?>
					<td><?php echo $about['Description']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $about['AboutUs_ID']; ?>" style="color:green;">
							<i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
						</a>
						<a href="lib/delete.php?id=<?php echo $about['AboutUs_ID']; ?>" style="color:red;">
							<i class="fa fa-times fa-2x" aria-hidden="true"></i>
						</a>
					</td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
</section>
