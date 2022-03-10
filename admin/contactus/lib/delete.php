<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/db_connection.php');
if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
    // delete data
    $pdo = new Dbh();
    $sql = "DELETE FROM contactus WHERE ContactUs_ID = ?";
    $q = $pdo->connect()->prepare($sql);
    $q->execute(array($id));
    header("Location: ../index.php");
}