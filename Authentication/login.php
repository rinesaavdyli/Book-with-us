<?php
// include_once 'users.php';
// class Login extends Users{

//     public function usernameAndPasswordCorrect($username, $password){
//         $user = Users::getUserByUsername($username);
//         if ($user == null || count($user) == 0) return false;
//         else if (password_verify($password, $user[0]['Password'])) {
//            return true;
//         }
//         return false;
//     }
// }

include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/models/users.php');
class Login extends Users{

    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    private function usernameAndPasswordCorrect($username, $password){
        $user = Users::getUserByUsername($username);
        if ($user == null || count($user) == 0) return false;
        else if (password_verify($password, $user[0]['Password'])) {
            return true;
        }
        return false;
    }

    public function verifyData(){
        $user = Users::getUserByUsername($this->username);
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            header("Location:JoinUs.php");
        } 
        else if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {
            $_SESSION['username'] = $this->username;
            if($user[0]['Role']=='2'){
                $_SESSION['is_admin'] = true;
                header('Location: admin/indexFolder/index.php');
            }else{
                $_SESSION['is_admin'] = false;
                header('Location:JoinUs.php');
            }
        } 
        else {
            echo '<br><p style="text-align:center; color:white; margin-top:105px;">Username or password is wrong!</p>';
        }
    }

    private function variablesNotDefinedWell($username, $password){
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

}