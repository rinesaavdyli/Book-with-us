<?php
include_once 'Authentication/view/usersview.php';
include_once 'Authentication/Controller/userscontroller.php';
include_once 'Authentication/register.php';
include_once 'Authentication/login.php';

session_start();  
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
        <div class="register forms form-style">
            <input id="email" type="text" class="input input-field" name="register-email" placeholder="Enter Email..." />
            <input type="text" class="input input-field" name="register-username" placeholder="Enter Username..." />
            <input id="pass1" type="password" class="input input-field" name="register-password" placeholder="Enter Password..." />
           <input type="checkbox"class="check-box"><span> Agree on the terms and conditions</span>
            <input type="submit" id="submit1" class="input submit" name='register' value="Register" onclick="validate(1)"/>
            <?php
                  if(isset($_POST['register'])){
                    $username = $_POST['register-username'];
                    $email = $_POST['register-email'];
                    $password = $_POST['register-password'];

                    $passH = password_hash($password, PASSWORD_BCRYPT);
                
                    $pattern = '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/';
                    $emailRegex = preg_match($pattern, $email);
                
                    $exists = new Register();
                    $validation=$exists->userExists($username, $email);
                    
                    if($username==='' || $email==='' || $password===''){
                        echo '<br><p style="text-align:center; color:white;">Please fill the required fields!</p>';
                       
                    }
                    else if($emailRegex==0){
                      echo '<br><p style="text-align:center; color:white;">Email not available!</p>';
                    }
                    else if($validation==true){
                      echo '<br><p style="text-align:center; color:white;">Username or email not available!</p>';
                    }
                    else if(strlen($password)<6){
                      echo '<br><p style="text-align:center; color:white;">Password too short!</p>';
                    }
                    else{
                      $addUser = new UsersController();
                      $addUser->createUser($username, $email, $passH, 1);
                    //   echo '<script language="javascript">';
                    //   echo 'alert("Please login now!")';
                    //   echo '</script>';
                        echo '<br><p style="text-align:center; color:white;">Register successful!<br>Please login now!</p>';
                        // header('Location: JoinUs.php');
                        $addUser = null;
                    }
                }
            ?>
        </div>
        </form>
      </div>

       
    </main>
    
</body>

</html>
