<?php
 require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/view/aboutviewer.php');
 include ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/admin/Components/header.php');
 require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/view/contactviewer.php');
 ?>

<section class="block_section">
	<div class="row">
		<div class="small_article">
			<div class="small_article__content">
				<p style="text-align:center; color:brown" >Here is the list of all the messages you recieved from the users!</p>
			</div>
		</div>
		<table>
			<caption><h1 class="table-title">Contacts</h1></caption>
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Subject</th>
					<th>Message</th>
					<th>Options</th>
					
				</tr>
			</thead>
			<tbody>
			<?php 
				$contact = new ContactViewer();
				$contacts = $contact->showAllContacts(); 
			?>
			<?php foreach ($contacts as $contact): ?>
				<tr>
					<td><?php echo $contact['ContactUs_ID']; ?></td>
					<td><?php echo $contact['Username']; ?></td>
					<td><?php echo $contact['Email']; ?></td>
					<td><?php echo $contact['Subject']; ?></td>
					<td><?php echo $contact['Message']; ?></td>
					<td>
						
						<a href="lib/delete.php?id=<?php echo $contact['ContactUs_ID']; ?>" style="color:red;">
							<i class="fa fa-times fa-2x" aria-hidden="true"></i>
						</a>
					</td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
</section>


