<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/models/users.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/models/contacts.php');

class Contact extends Users
 {
     public function emailRegistered($email){
        if(users::getUserByEmail($email)){
           return true;
      }
       else{
            return false;
        }
    }
   
}
class ContactViewer extends Contacts
	{
        public function showContact($contactid){
            $results = $this->getContact($contactid);
            //echo "Name: ".$results[0]['username']." ".$results[0]['email']." ".$results[0]['Subject']."".$results[0]['Message'];
        }
 	   
        public function showAllContacts(){
            $results = $this->getContacts();
            return $results;
        }
	}
	
?>
