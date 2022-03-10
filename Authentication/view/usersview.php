<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/models/users.php');

class UsersView extends Users{

    public function showUser($userid){
        $results = $this->getUser($userid);
        return $results;
        //echo "Full name: ".$results[0]['username']." ".$results[0]['email'];
    }

    // public function usernameAndPasswordCorrect($username, $password){
    //     $users = $this->getAllUsers();
    //     foreach($users as $user){
    //         $data=$user;
    //         $userwithid = $this->getUser($data[0]['user_ID']);
    //         if($userwithid[0]['username']==$username && $userwithid[0]['password']==$password){
    //             return true;
    //         }
    //     }
    //     return false;
    // }
    public function showAllUsers(){
        $results = $this->getAllUsers();
        return $results;
    }
}