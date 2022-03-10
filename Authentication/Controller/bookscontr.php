<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/models/books.php');
class BooksController extends Books{
    
    public function createBook($isbn, $title,$author,$genre, $description,$img,$likes){

        $this->insertBooks($isbn, $title,$author,$genre, $description,$img,$likes);
    
    }
    public function createBooks($isbn, $title,$author,$genre, $description,$likes){

        $this->insertBook($isbn, $title,$author,$genre, $description,$likes);
    
    }
    public function bookEdit($isbn, $title,$author,$genre, $description,$likes,$id){
        $book = new Books();
        $book->editBook($isbn, $title,$author,$genre, $description,$likes,$id);
    }
   
}