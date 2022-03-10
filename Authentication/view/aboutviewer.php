<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/models/aboutus.php');
class AboutUsView extends AboutUs{

    public function showAboutus(){
        $results = $this->getAllAboutus();
        return $results;
    }

        public function showAbout($aboutid){
            $results = $this->getAbout($aboutid);
            return $results;
        }
}