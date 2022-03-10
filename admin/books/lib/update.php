<?php   

include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/db_connection.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/Controller/bookscontr.php');

if ( !empty($_POST)) {
        // keep track validation errors
        $errors = [];
         
        // keep track post values
        $id = $_POST['id'];
        $isbn= $_POST['isbn'];
		$title = $_POST['title'];
		$author = $_POST['author'];
		$genre = $_POST['genre'];
        $description = $_POST['description'];
        $likes = $_POST['likes'];
         
        // validate input
        $valid = true;
		if (empty($isbn)) {
            array_push($errors, 'Please enter the ISBN');
            $valid = false;
        } 
        
        if (empty($title)) {
            array_push($errors, 'Please enter the title');
            $valid = false;
		} 
        if (empty($author)) {
            array_push($errors, 'Please enter the author');
            $valid = false;
		} 
        if (empty($genre)) {
            array_push($errors, 'Please enter the genre');
            $valid = false;
		} 
        if (empty($description)) {
            array_push($errors, 'Please enter description');
            $valid = false;
		}
        if (empty($likes)) {
            array_push($errors, 'Please enter the Likes');
            $valid = false;
		} 

        if(!$valid){
            foreach($errors as $err){
                echo '<p style="color:red">'.$err.'</p>';
            }
            echo '<a href="../edit.php?id='.$id.'">Back</a>';
        }
        elseif($_FILES['image']['name'] !== ''){
            $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/Book With Us/book-with-us/admin/images/uploads/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check file size
            if ($_FILES["image"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                echo '<a href="../edit.php?id='.$id.'">Back</a>';
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                echo '<a href="../edit.php?id='.$id.'">Back</a>';
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                echo '<a href="../edit.php?id='.$id.'">Back</a>';
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // insert data
                    if ($valid) {
                        if (array_key_exists('delete_file', $_POST)) {
                            $filename = $_POST['delete_file'];
                            if (file_exists($filename)) {
                                unlink($filename);
                                echo 'File '.$filename.' has been deleted';
                            } else {
                                echo 'Could not delete '.$filename.', file does not exist';
                            }
                        } 
                        $database = new Dbh();
                        $pdo = $database->connect();
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
                        $sql = "UPDATE book SET ISBN=?, Title=?,Author=?, Genre=?,Description=?, Image=?, Likes=? WHERE Libri_ID = ?";
                        $q = $pdo->prepare($sql);
                        $domain = sprintf( "%s://%s", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http', $_SERVER['SERVER_NAME']);
                        $target_file = str_replace($_SERVER['DOCUMENT_ROOT'], $domain, $target_file);
                        $q->execute(array($isbn, $title,$author,$genre,$description,$target_file,$likes,$id));
                        //$this->disconnect();
                        header("Location: ../index.php");
                    }
                } else {
                    echo "Sorry, there was an error uploading your file.";
                    echo '<a href="../edit.php?id='.$id.'">Back</a>';
                }
            }
        }else{
            $book = new BooksController();
            $books = $book->bookEdit($isbn, $title,$author,$genre, $descrip,$likes,$id);
            header("Location: ../index.php");
        }
    }
