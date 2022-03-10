<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/db_connection.php');
class Books extends Dbh{

    protected function getBook($bookid){
        $sql = "SELECT * FROM book WHERE Libri_ID = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':id', $bookid);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

    // protected function insertBooks($isbn, $title,$author,$genre, $description,$img,$likes){
    //     $sql = "INSERT INTO book (ISBN,Title,Author,Genre,Description,Image,Likes) VALUES (?,?,?,?,?,?,?)";
    //     $stmt = $this->connect()->prepare($sql);
    //     $stmt->execute([$isbn, $title,$author,$genre, $description,$img,$likes]);
    // }

    protected function insertBook($isbn, $title,$author,$genre, $description,$img,$likes){
        $sql = "INSERT INTO book (ISBN,Title,Author,Genre,Description,Image,Likes) VALUES (:isbn,:title,:author,:genre,:descrip,:img,:likes)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':isbn', $isbn);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':genre', $genre);
        $stmt->bindParam(':descrip', $description);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':likes', $likes);

        $stmt->execute();
    }



    protected function getAllBooks(){
        $sql = "SELECT * FROM book";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute();
        $books = $stmt->fetchAll();
        return $books;
    }
    protected function editBook($isbn, $title,$author,$genre, $description,$likes, $id){
        $sql = "UPDATE book b SET b.ISBN=:isbn, b.Title=:title, b.Author=:author, b.Genre=:genre, b.Description =:description, b.Likes=:likes WHERE b.Libri_ID = :id";

        $statement = $this->connect()->prepare($sql);
        $statement->bindParam(":isbn", $isbn);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":author", $author);
        $statement->bindParam(":genre", $genre);
        $statement->bindParam(":description", $description);
        $statement->bindParam(":likes", $likes);
        $statement->bindParam(":id", $id);

        $statement->execute();
    }
    
    protected function getMostLiked(){
        $sql = "SELECT * FROM book order by Likes desc";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute();
        $books = $stmt->fetchAll();
        return $books;
    }
    protected function getLastInserted(){
        $sql = "SELECT *  FROM book WHERE Libri_ID =(SELECT MAX(Libri_ID)FROM book)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll();
        return $row;
    }
}
?>