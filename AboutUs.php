<?php require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/view/aboutviewer.php');

require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/search.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Components/header.php');

$aboutus = new AboutUsView();  
$about = $aboutus->showAboutus();

    ?>
    <main class="content body-Aboutus">
        <div class="AboutUs-main">
        <div id="title">About Us</div>
        <div id="text">Know more about our Journey!</div>
        <br>
        <hr style="margin: 0% 5%;">
        <br><br><br><br><br>
       <?php
         foreach($about as $aboutt){
        ?>
        <div class="our-start">
        
                            <?php if ($aboutt  ['Image']): ?>
                                <img src="<?php echo $aboutt['Image']; ?>" >
                            <?php else: ?>
                                    <p>No image Selected</p>
                            <?php endif?>  
                 <h1 style="text-align: center;"><?php  echo $aboutt ['Title'];?></h1> 
                 <p style="font-size: 0.85em; width: 90%;"><?php echo $aboutt ['Description']; ?></p>
        </div>
        <?php
        }
        ?>
        
    </main>
    <?php 
        include "Components/footer.php";
    ?>
   
</body>

</html> 