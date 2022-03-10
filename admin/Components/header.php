<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/login.php');

session_start();
if (!isset( $_SESSION['is_admin']) && !$_SESSION['is_admin']) {
	header("Location: ../../JoinUs.php");
}
else if ((isset( $_SESSION['is_admin'] ) && !$_SESSION['is_admin'] )) {
	header("Location: ../../index.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="dist/Images/logo1.ico">
    <link rel="stylesheet" href="../dist/css/style.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/Responsive.css" type="text/css">
    <link rel="stylesheet" href="../css/app.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="../dist/js/main.js"></script>
    <title>Book With Us</title>

<body>
    <header>
        <div id="scroll-fixed">
            <div id="scroll"> 
            <div class="flex-container navbar" id="navbar" >
                <div>
                <a href="../../index.php"><img src="../dist/Images/logo.PNG" id="logo" /></a>
                </div>
                <div class='list'>
                  <a href=''></a>
                  <a href="../../index.php">Home</a>
                  <a href="../aboutus/index.php">About Us</a>
                  <a href="../books/index.php">Books</a>
                  <a href="../contactus/index.php">Contact</a>
                  <a href="../users/index.php">Users</a>
                  <div class="dropdownAcc">
                    <button class="dropbtnAcc"> <i class="material-icons" style="font-size:30px;">person</i>
                    </button>
                    <div class="dropdown-contentAcc">
                                <a><?php echo $_SESSION['username']?></a>
                                <a class="" href="../../Authentication/logout.php">Logout</a>
                        </div>
                  </div> 
                  <a style="font-size:15px;" class="icon" onclick="ResponsiveNavbar()">&#9776;</a>
                  </div>
        </div>
</div></div>
    </header>