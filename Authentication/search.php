<?php

include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/db_connection.php');

class Search{

    public function searchByTitle($title){

        $db = new Dbh();
        $sql = "SELECT * FROM book WHERE Title = ?";
        $stmt = $db->connect()->prepare($sql);
        $stmt->execute(array($title));
        $book = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $book;
    }

    public function searchByGenre($genre){
        $db = new Dbh();
        $sql = 'SELECT ISBN, Title, Author, Description, Image FROM book WHERE Genre like :genre';
        $genreQuery = $db->connect()->prepare($sql);
    
        $genreQuery->execute(array(
            ':genre'=>$genre
        ));
        $bookSelect = $genreQuery->fetchAll(PDO::FETCH_ASSOC);
        return $bookSelect;
    }

    public function searchByKeyword($keyword){
        $db = new Dbh();
        $sql = 'SELECT ISBN, Title, Author, Description, Image FROM book WHERE ISBN like :keyword OR Title like :keyword or Author like :keyword';
        $query = $db->connect()->prepare($sql);
        $query->bindParam(':keyword', $keyword);
        $query->bindValue(':keyword', '%' . $keyword . '%');
    
        $query->execute();
        $bookSelect = $query->fetchAll(PDO::FETCH_ASSOC);
        return $bookSelect;
    }

    public function getByImg($img){

        $db = new Dbh();
        $sql = "SELECT * FROM book WHERE Image = ?";
        $stmt = $db->connect()->prepare($sql);
        $stmt->execute(array($img));
        $book = $stmt->fetch(PDO::FETCH_ASSOC);

        return $book;
    }

    public function countAll(){
        $db = new Dbh();
        $sql = "SELECT MAX(Libri_ID) AS books FROM book";
        $stmt = $db->connect()->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['books'];
    }

    public function existsID($id){
        $db = new Dbh();
        $stmt = $db->connect()->prepare("SELECT Libri_ID FROM book WHERE Libri_ID=?");
        $stmt->execute([$id]); 
        $stmt->fetchColumn();
        return true;
    }
    public function updateLikes($likes,$id){

        $db = new Dbh();
        $sql = "UPDATE book  SET Likes = ? WHERE Libri_ID=? " ;
        $stmt = $db->connect()->prepare($sql);
        $stmt->execute(array($likes,$id));
    }

   public function getLikes($id){
    $db = new Dbh();
    $stmt = $db->connect()->prepare("SELECT Likes FROM book WHERE Libri_ID=?");
    $stmt->execute([$id]); 
    $likes = $stmt->fetchColumn();
    return $likes;
   }
}