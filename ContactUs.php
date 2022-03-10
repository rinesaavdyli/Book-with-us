<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/login.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/models/contacts.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/view/contactviewer.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/Controller/contactcontr.php');
session_start();
$loggedIN = isset($_SESSION['username']);
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="dist/js/main.js"></script>
    <title>Book With Us</title>
</head>

<body class="body-contactUS">
    <header>
            <div class="flex-container navbar-contact" id="navbar" >
                <div>
                <a href="index.php"><img src="dist/Images/logo.PNG" id="logo" /></a>
                </div>
                <div class='list'>
                  <a href=''></a>
                  <a href="index.php">Home  </a>
                  <a href="AboutUs.php">About Us</a>
                  <a href="Books.php">Books</a>
                  <a href="ContactUs.php">Contact</a>
                  <div class="dropdownAcc">
                    <button class="dropbtnAcc"> <i class="material-icons" style="font-size:30px;">person</i>
                    </button>
                    <div class="dropdown-contentAcc">
                            <?php if($loggedIN): ?>
                                <a><?php echo $_SESSION['username']?></a>
                                <a class="" href="Authentication/logout.php">Logout</a>
                            <?php else: ?>
                                <a href="#home">Account</a>
                                <a href="JoinUs.php">Login/Register</a>
                            <?php endif; ?>
                        </div>
                  </div> 
                  <a style="font-size:15px;" class="icon" onclick="ResponsiveNavbar()">&#9776;</a>
                  </div>
        </div>
        <div id="map">
            <p><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1504722.053089399!2d19.780976728476453!3d42.55719838546098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13537af354bf7df1%3A0xbfffeedfabc31791!2sKosovo!5e0!3m2!1sen!2s!4v1558261400989!5m2!1sen!2s"
                    width="100%" height="350px" frameborder="0" style="border:0; margin-top:7%;"
                    allowfullscreen></iframe></p>
        </div>
        </div><br><br>
        <table>
            <tr>
                <td style="width:48%; ">
                    <hr />
                </td>
                <td style="vertical-align:right; text-align: center; ">BOOK WITH US</td>
                <td style="width:48%;">
                    <hr />
                </td>
            </tr>
        </table>

    </header>
    <main><br><br><br>
        <div id="text-Contactus" style="font-style: normal; margin-right: 10%; margin-left: 10%;"> Lorem ipsum dolor sit
            amet consectetur adipisicing elit. Corrupti, facere, consequatur non in fugit libero delectus quaerat
            pariatur,
            accusamus minus itaque perspiciatis? Ducimus nesciunt vitae minima nulla impedit sit nemo?Lorem ipsum dolor
            sit amet consectetur adipisicing elit. Est alias cum ad dolorem. Esse odit blanditiis sequi,
            in dolores soluta quam quos quod fuga nam laudantium ad, provident dicta quis!Lorem Lorem ipsum dolor sit
            amet consectetur adipisicing elit. Minus, harum consequatur dicta ut quia nulla, officiis excepturi
            cumque ducimus natus quae recusandae molestias, perferendis voluptatum. Temporibus ipsa aliquid id Lorem
            ipsum dolor sit amet, consectetur adipisicing elit. Sint sapiente sunt obcaecati nisi, sed quibusdam
            ad saepe, dolores officiis ex laborum non veniam hic eius! In tempora asperiores ullam illo.</div>

        <div class="Contact-Form">
            <hr style="margin-left: 30px; margin-right: 30px; margin-bottom: 5px;">
            <h2>GET IN TOUCH WITH US!</h2>
            <form id="contact_form" action="" method="post">
                <input type="text" name="Username" placeholder="Name..." class="field field1">
                <input type="text" name="Email" placeholder="Email..." class="field field1" id="email">
                <input type="text" name="Subject"placeholder="Subject..." class="field">
                <textarea id="message" name="Message" placeholder="Message" class="field"></textarea>
                <input type="submit" name="Submit" value="Contact Us" onclick="contact()" class="Contact-btn" id="Contact.btn">
            </form>
        </div>
        <?php 
        
        if(isset($_POST['Submit'])) {
        $username = $_POST['Username'];
        $email = $_POST['Email'];
        $subject = $_POST['Subject'];
        $message = $_POST['Message'];
        
       
        $true = new Contact();
        $validation=$true->emailRegistered( $email);
        
        if($username==='' || $email==='' || $subject===''|| $message===''){
            echo '<br><p style="text-align:center; color:black;">Please fill the required fields!</p>';
            
        }
         else if($validation==false){
          echo '<p style="text-align:center; color:black; margin-top:-50px; margin-bottom:100px;">EMAIL IS NOT REGISTERED.PLEASE <a href="Register.php">REGISTER</a> FIRST!</p>';
        }
        else{
            $submit=new ContactController();
            $submit->createContact($username,$email,$subject,$message);
            $submit = null;
            echo '<script language="javascript">';
            echo 'alert("Form is subbmited Successfully...You will be hearing from us really soon!")';
            echo '</script>'; 
        }  
    }
    
    ?> 
    </main>
    <?php 
        include "Components/footer.php";
    ?>
    
<Script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></Script>

</html>