<?php
include_once 'Authentication/view/usersview.php';
include_once 'Authentication/Controller/userscontroller.php';
include_once 'Authentication/register.php';
include_once 'Authentication/login.php';

session_start();
if(isset($_POST['login'])) {
    $login = new Login($_POST);
    $login->verifyData();
}
    if (isset( $_SESSION['is_admin']) && $_SESSION['is_admin']) {
        header("Location: admin/indexFolder/index.php");
    }
    else if ( isset( $_SESSION['is_admin'] ) && !$_SESSION['is_admin'] ) {
        header("Location: index.php");
    }
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="dist/Images/logo1.ico">
    <link rel="stylesheet" href="dist/css/style.css" type="text/css">
    <script src="dist/js/main.js"></script>
    <title>Book With Us</title>
</head>

<body class="BodyJoinUs">
    <main>
      <div class="Form-main">
        <h1 id="hh1"> WELCOME!</h1>
        <a id="linku" href="index.php">&#129152;</a>

        <div class="buttons">
        <button type="button" class="c-btn" onclick=""><a href="JoinUs.php" style="color:white;">Login</a></button>
        <button type="button" class="c-btn" onclick=""><a href="Register.php" style="color:white;">Register</a></button>
        </div>
       <form id="mainform"  method="post" >
           <div class="login forms form-style">
            <input type="text" name="username" class="input input-field" placeholder="Username..." >
            <input id="psw" type="password" name='password' class="input input-field" placeholder="Password..." />
            <input type="checkbox"class="check-box"><span> Remember Password</span>
            <input type="submit" id="submit" name='login' class="input submit" value="Login" onclick="validate(0)"/>  
            <?php
          ?>
        </div>
        </form>
      </div>

       
    </main>
    
</body>

</html>
