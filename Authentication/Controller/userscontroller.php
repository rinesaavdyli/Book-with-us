<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/models/users.php');
class UsersController extends Users{
    
    public function createUser($username, $email, $password, $role){

        $this->setUser($username, $email, $password, $role);
    
    }
    public function userEdit($id, $username, $email, $password, $role){
        //$user = new Users();
        $this->editUser($id, $username, $email, $password, $role);
    }
   
}