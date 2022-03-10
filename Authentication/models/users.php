<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/db_connection.php');
class Users extends Dbh{
    
    // protected function getUser($userid){
    //     $sql = "SELECT * FROM user WHERE User_ID = ?";
    //     $stmt = $this->connect()->prepare($sql);
    //     $stmt->execute([$userid]);

    //     $results = $stmt->fetchAll();
    //     return $results;
    // }

    protected function getUser($userid){
        $sql = "SELECT * FROM user WHERE User_ID = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':id', $userid);
        $stmt->execute();
        $results = $stmt->fetchAll();
        if($results){
            return $results[0];
        }
        
    }

    protected function setUser($username, $email, $password, $role){
        $sql = "INSERT INTO user(Username, Email, Password, Role) VALUES (?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $email, $password, $role]);
    }

    protected function getUserByUsername($username){
        $sql = "SELECT * FROM user WHERE Username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    protected function getUserByEmail($email){
        $sql = "SELECT * FROM user WHERE Email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    protected function getAllUsers(){
        $sql    = "SELECT * FROM user";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute();
        $users   = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }
    
    protected function editUser($id, $username, $email, $password, $role){
        $sql = "UPDATE user u SET u.Username =:username, u.Email = :email, u.Password=:password, u.Role=:role WHERE User_ID = :id";

        $statement = $this->connect()->prepare($sql);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":role", $role);
        $statement->bindParam(":id", $id);
       
        $statement->execute();
    }
}