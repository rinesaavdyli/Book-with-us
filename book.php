<?php 
        include ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Components/header.php');
        require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/search.php');
       

        if(!empty($_GET['title'])){
            $title = $_REQUEST['title'];
            $books = new Search();
            $book = $books->searchByTitle($title);
        }
        $isAdminLogin = isset( $_SESSION['is_admin']) && $_SESSION['is_admin'];
    ?>
    <main>
        <div class="container">
            <div class='content col-02'>
                <div id="book-cover">
                    <img src="<?php echo $book[0]['Image'];?>" style="width: 265px; height: 400; margin:5px 0 0 0px;"><br>
                </div>
                <div id="book-description">
                    <h2><?php echo $book[0]['Title'];?>- <?php echo $book[0]['Author'];?></h2><br><br>
                    <ul>
                        <li>
                            <h4>Book Overview</h4>
                            <p><?php echo $book[0]['Description'];?></p><br>
                        </li>
                        <li>
                            <h4>ISBN</h4>
                            <p><?php echo $book[0]['ISBN'];?></p><br>
                        </li>
                        <li>
                            <h4>Genre</h4>
                            <p><?php echo $book[0]['Genre'];?></p><br>
                        </li>
                        <li>
                            <h4>Likes</h4>
                            <p><?php echo $book[0]['Likes'];?></p><br>
                        </li>
                    </ul>
                    <div class='reserve-btn'>
                    <div class = 'btn-reserve btn-container'>
                       <form action="" method="post">
                        <input type="submit" name="btn" value="Like" class="btn">
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    if(!$isAdminLogin){
    $likes=$books->getLikes($book[0]['Libri_ID']);
    if(isset($_POST['btn'])){
        $likes+=1;
        $nrlikes=$books->updateLikes($likes, $book[0]['Libri_ID']);
    }
}
    ?>
    <?php
        include ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Components/footer.php');
    ?>