<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/db_connection.php');
class Contacts extends Dbh
	{
		public function getContacts(){

			$sql = 'SELECT * FROM contactus';
			$stmt = $this->connect()->prepare($sql);
			$result=$stmt->execute();
			$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
			return $contacts;
		}
		
        protected function getContact($contactid){

			$sql = 'SELECT * FROM contact WHERE id=?';
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute($contactid);

			$results = $stmt->fetchAll();
			return $results;
			
    }
		protected function getContactByEmail($email){
			$sql = "SELECT * FROM contactus WHERE Email = ?";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$email]);
	
			$results = $stmt->fetchAll();
			return $results;
		}

	
	protected function setContact($username,$email,$subject,$message){
        $sql = "INSERT INTO contactus(username,email,subject,message) VALUES (?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username,$email,$subject,$message]);
    }
 }
	?>