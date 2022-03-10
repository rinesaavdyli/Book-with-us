<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/login.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/db_connection.php');
session_start();
$loggedIN = isset($_SESSION['username']);
$isAdminLogin = isset( $_SESSION['is_admin']) && $_SESSION['is_admin'];
$genre='';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="dist/Images/logo1.ico">
    <link rel="stylesheet" href="dist/css/style.css" type="text/css">
    <link rel="stylesheet" href="dist/css/Responsive.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="dist/js/main.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Book With Us</title>

</head>

<body >
    <header>
        <div id="scroll-fixed">
            <div id='scroll'>
                <div class="flex-container navbar" id="navbar">
                    <div>
                    <a href="index.php"><img src="dist/Images/logo.PNG" id="logo" /></a>
                    </div>
                    <div class='list'>
                      <a href=''></a>
                      <?php
                      if($isAdminLogin){
                      ?>
                        <a href="admin/indexFolder/index.php">Dashboard</a>
                      <?php
                      }else{
                      ?>
                      <a href="index.php">Home</a>
                      <?php }?>
                      <a href="AboutUs.php">About Us</a>
                      <a href="Books.php" name="books">Books</a>
                      <a href="ContactUs.php">Contact</a>
                      <div class="dropdownAcc">
                        <button class="dropbtnAcc"> <i class="material-icons" style="font-size:30px;">person</i>
                        </button>
                        <div class="dropdown-contentAcc">
                            <?php if($loggedIN): ?>
                                <a><?php echo $_SESSION['username']?></a>
                                <a class="" href="Authentication/logout.php">Logout</a>
                            <?php else: ?>
                                <!-- <a href="JoinUs.php">Account</a> -->
                                <a href="JoinUs.php"><?php echo $isAdminLogin ? 'Dashboard' : 'Login' ?></a>
                                <a href="Register.php">Register</a>
                            <?php endif; ?>
                        </div>
                      </div> 
                      <a style="font-size:15px;" class="icon" onclick="ResponsiveNavbar()">&#9776;</a>
                      </div>
                    </div>
                <div>
                    <form name="searchForm" class="search-form" method="post" action="books.php" id="search">
                        <div class="dropdown">
                            <div class="dropdown-style">
                                <select name='genre'>
                                    <option data-icon="icon-heart" value="G" selected="">Genre</option>
                                    <option data-icon="icon-heart" value="Adventure"<?php if($genre=='Adventure'){echo 'selected';}?>>Adventure</option>
                                    <option data-icon="icon-heart" value="Action"<?php if($genre=='Action'){echo 'selected';}?>>Action</option>
                                    <option data-icon="icon-heart" value="Fiction"<?php if($genre=='Fiction'){echo 'selected';}?>>Fiction</option>
                                    <option data-icon="icon-heart" value="Crime/Detective"<?php if($genre=='Crime/Detective'){echo 'selected';}?>>Crime</option>
                                    <option data-icon="icon-heart" value="Fantasy"<?php if($genre=='Fantasy'){echo 'selected';}?>>Fantasy</option>
                                    <option data-icon="icon-heart" value="Horror"<?php if($genre=='Horror'){echo 'selected';}?>>Horror</option>
                                    <option data-icon="icon-heart" value="Mythology"<?php if($genre=='Mythology'){echo 'selected';}?>>Mythology</option>
                                    <option data-icon="icon-heart" value="Romance"<?php if($genre=='Romance'){echo 'selected';}?>>Romance</option>
                                    <option data-icon="icon-heart" value="Sci-fi"<?php if($genre=='Sci-fi'){echo 'selected';}?>>Sci-fi</option>
                                    <option data-icon="icon-heart" value="Other"<?php if($genre=='Other'){echo 'selected';}?>>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="search-nav">
                            <input type="text" name="keyword"
                                    placeholder="Search by Title, Author, or ISBN">
                                    <input type='submit' name='submit' value='Search' class='submitSearch'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>