<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/models/contacts.php');

class ContactController extends Contacts{
    public function createContact($username,$email,$subject,$message){

    $this->setContact($username,$email,$subject,$message);
    }
}
?>