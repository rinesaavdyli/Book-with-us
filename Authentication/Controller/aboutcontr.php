<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/models/aboutus.php');
class AboutUsController extends AboutUs{
    
    public function createAboutUs($img, $title, $descrip){

        $this->insertAboutUs($img, $title, $descrip);
    }
    
    public function createAbout($title, $descrip){

        $this->insertAboutUs($title, $descrip);
    }

    public function aboutusEdit( $title, $description, $id){
        $aboutus = new AboutUs();
        $aboutus->editAboutUs( $title, $description, $id);
    }
}
