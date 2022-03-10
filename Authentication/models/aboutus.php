<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/db_connection.php');
class AboutUs extends Dbh{

    protected function getAbout($userid){
        $sql = "SELECT * FROM aboutus WHERE AboutUs_ID = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userid]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function insertAboutUs($img, $title, $descrip){
        $sql = "INSERT INTO aboutus(image, title, description) VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$img, $title, $descrip]);
    }

    protected function getAllAboutus(){
        $sql = "SELECT * FROM aboutus";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute();
        $aboutus = $stmt->fetchAll();
        return $aboutus;
    }
    protected function editAboutUs($title, $description, $id){
        $sql = "UPDATE aboutus a SET a.Title=:title, a.Description =:description WHERE a.AboutUs_ID = :id";

        $statement = $this->connect()->prepare($sql);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":description", $description);
        $statement->bindParam(":id", $id);
       
        $statement->execute();
    }
}