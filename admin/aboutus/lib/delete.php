<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/db_connection.php');

if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
    // delete data
    $id = $_GET['id'];
    $pdo = new Dbh();
    $sql = "DELETE FROM aboutus WHERE AboutUs_ID = ?";
    $q = $pdo->connect()->prepare($sql);
    $q->execute(array($id));
    header("Location: ../index.php");
}