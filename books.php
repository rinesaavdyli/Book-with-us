<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Components/header.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/view/booksviewer.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/search.php');
$books = new BooksView();
$book=$books->showBooks();
$bookSearch = new Search();

if (isset($_POST['submit'])){
?><div class="content"><?php
    $keyword='';
    $genre='';
    if(empty($_POST['keyword'])){
        $keyword = '';
        $genre = $_POST['genre'];
    }
    else{
        $keyword=$_POST['keyword'];
        $genre = '';
    }
if($keyword=='' and $genre!=''){
    $bookSelect = $bookSearch->searchByGenre($genre);

    foreach ($bookSelect as $bookSelected) {
        ?>
        <div class="flex-search-row">
        <div class='image'>
        <?php if($bookSelected['Image']):?><img src="<?php echo $bookSelected['Image']?>" class="img-books"><br>
        <?php else:?><p>No image selected</p>
        <?php endif?>
        </div>
      <div>
        <h1><a href="book.php?title=<?php echo $bookSelected['Title'];?>" name='book' class="book-link"><b><?php echo $bookSelected['Title'];?></b><br>by
            <?php echo $bookSelected['Author']; ?></a></h1>
	</div>
        </div><?php
    }
}
    elseif($keyword!='' and $genre==''){
    $keyword=$_POST['keyword'];
    $bookSelect = $bookSearch->searchByKeyword($keyword);
    ?><p class="flex-search-row" style="padding-top: 30px; padding-left: 60px; padding-bottom: 30px; font-family: Arial, Helvetica, sans-serif; font-size: 20px; ">Based on what you have searched: <i><?php echo $keyword?></i></p><?php
    foreach ($bookSelect as $bookSelected) {
        ?>
        <div class="flex-search-row">
        <div class='image'>
        <?php if($bookSelected['Image']):?><img src="<?php echo $bookSelected['Image']?>" class="img-books"><br>
        <?php else:?><p>No image selected</p>
        <?php endif?>
        </div>
      <div>
        <h1><a href="book.php?title=<?php echo $bookSelected['Title'];?>" name='book' class="book-link"><b><?php echo $bookSelected['Title'];?></b><br>by
            <?php echo $bookSelected['Author']; ?></a></h1>
	</div>
        </div><?php
    }
}?></div><?php
}
else{
    ?>
    <main>
        <div class="container">
            <div class="content">
                <br>
                <?php 
                $books = array_chunk($book, 3);

                foreach ($books as $book) {
                    echo "<div class='flex-row'>";
                    foreach ($book as $item) {    ?>                  
                        <div class='image'>
                        <?php if($item['Image']):?><img src="<?php echo $item['Image']?>" class="img-books"><br>
                        <?php else:?><p>No image selected</p>
                        <?php endif?>
                        <h1><a href="book.php?title=<?php echo $item['Title'];?>" name='book' class="book-link"><b><?php echo $item['Title'];?></b><br>by
                        <?php echo $item['Author']; ?></a></h1></div><?php
                    }
                    echo "</div>";
                }
               ?>
            </div>
        </div>
    </main>
    <?php }
        include "Components/footer.php";
    ?>