<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/models/users.php');
class Register extends Users{
    public function userExists($username, $email){
        if(Users::getUserByUsername($username) || Users::getUserByEmail($email)){
            return true;
        }
        else{
            return false;
        }
    }
}