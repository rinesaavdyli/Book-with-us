<?php
class Dbh{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "bookwithus";

        try{
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
            return $pdo;
            
        }catch(PDOException $e){
            echo "Connection failed: ".$e->getMessage();
        }
    }
}