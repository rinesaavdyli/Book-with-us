<?php 
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/db_connection.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/Controller/userscontroller.php');
if ( !empty($_POST)) {
        // keep track validation errors
        $errors = [];
         
        // keep track post values
		$id = $_POST['id'];
        $username = $_POST['username'];
		$email = $_POST['email'];
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $role = $_POST['role'];
         
        // validate input
        $valid = true;
        if (empty($username)) {
        	array_push($errors, 'Please enter username');
            $valid = false;
        }

        if (empty($email)) {
        	array_push($errors, 'Please enter email');
            $valid = false;
        } 
        if (empty($password)) {
        	array_push($errors, 'Please enter password');
            $valid = false;
        } 
        if (empty($role)) {
            array_push($errors, 'Please enter role');
            $valid = false;
        }

        if(!$valid){
        	foreach($errors as $err){
    			echo '<p style="color:red">'.$err.'</p>';
    		}
    		echo '<a href="../edit.php?id='.$id.'">Back</a>';
        }else{
            $u = new UsersController();
            $user = $u->userEdit($id, $username,$email,$password,$role);
            header("Location: ../index.php");
        }
    }
