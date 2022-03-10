<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/models/books.php');
class BooksView extends Books{

    public function showBooks(){
        $results = $this->getAllBooks();
        return $results;
    }

        public function showBook($bookid){
            $results = $this->getBook($bookid);
            if($results){
                return $results[0];
            }
        }
        public function showMostLiked(){
            $results = $this->getMostLiked();
            return $results;
        }
        public function showLastInserted(){
            $results = $this->getLastInserted();
            return $results;
        }
}
?>