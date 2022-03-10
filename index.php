<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Components/header.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/BookWithUs/book-with-us/Authentication/view/booksviewer.php');


$books = new BooksView();
$book=$books->showMostLiked();
$lastbook=$books->showLastInserted();

   ?>
    <main>
        <div class="container">
            <div class="slider-border">
                <div class="slider">
                    <div class="mySlides fade-slider">
                        <img src="dist/Images/slide1.jpg">
                        <div class="text-block">
                            <h1>fernweh</h1>
                            <p>(n.) wanderlust; an ache for distant places or a strong desire to travel</p>
                        </div>
                    </div>
                </div>

                <div class="mySlides fade-slider">
                    <img src="dist/Images/slide2.jpg">
                    <div class="text-block">
                        <h1>arcane</h1>
                        <p>(adj.) secret, mysterious, understood only by few</p>
                    </div>
                </div>

                <div class="mySlides fade-slider">
                    <img src="dist/Images/slide3.jpg">
                    <div class="text-block">
                        <h1>hiraeth</h1>
                        <p>(n.) a homesickness for a home to which you cannot return, a home which maybe never was</p>
                    </div>
                </div>

                <div class="mySlides fade-slider">
                    <img src="dist/Images/slide4.jpg">
                    <div class="text-block">
                        <h1>onism</h1>
                        <p>(n.) the awareness of how little of the world you'll experience</p>
                    </div>
                </div>

                <div class="mySlides fade-slider">
                    <img src="dist/Images/slide5.jpg">
                    <div class="text-block">
                        <h1>snickersnee</h1>
                        <p>(n.) fighting with knives</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <h1 class="text">MOST LIKED THIS MONTH</h1>
            <div class="flex-row" id='hottest'>
            <div>
                    <?php if ($book [0] ['Image']): ?>
                                <img class="img-books" src="<?php echo $book[0] ['Image']; ?>" >
                            <?php else: ?>
                                    <p>No image Selected</p>
                            <?php endif?> <br>
                            <p><a href="book.php?title=<?php echo $book[0]['Title'];?>" name='book' class="book-link"><b><?php echo $book[0]['Title'];?></b><br>by
                                <?php echo $book[0]['Author']; ?></a></p> 
                </div>
                <div>
                    <?php if ($book [1] ['Image']): ?>
                                <img class="img-books" src="<?php echo $book[1] ['Image']; ?>" >
                            <?php else: ?>
                                    <p>No image Selected</p>
                            <?php endif?> <br>
                            <p><a href="book.php?title=<?php echo $book[1]['Title'];?>" name='book' class="book-link"><b><?php echo $book[1]['Title'];?></b><br>by
                                <?php echo $book[1]['Author']; ?></a></p> 
                </div>
                <div>
                    <?php if ($book [2] ['Image']): ?>
                                <img class="img-books" src="<?php echo $book[2] ['Image']; ?>" >
                            <?php else: ?>
                                    <p>No image Selected</p>
                            <?php endif?> <br>
                            <p><a href="book.php?title=<?php echo $book[2]['Title'];?>" name='book' class="book-link"><b><?php echo $book[2]['Title'];?></b><br>by
                                <?php echo $book[2]['Author']; ?></a></p> 
                </div>
                <div>
                    <?php if ($book [3] ['Image']): ?>
                                <img class="img-books" src="<?php echo $book[3] ['Image']; ?>" >
                            <?php else: ?>
                                    <p>No image Selected</p>
                            <?php endif?> <br>
                            <p><a href="book.php?title=<?php echo $book[3]['Title'];?>" name='book' class="book-link"><b><?php echo $book[3]['Title'];?></b><br>by
                                <?php echo $book[3]['Author']; ?></a></p> 
                </div>
            </div>
            <h2 class="text">MOST SEARCHED</h2>
            <div class="flex-row" id='searched'>
                <div>
                    <img src="dist/Images/i.jpg" class="img-books"><br>
                    <p class="book-link"><a href="#book" class="book-link"><b>Inferno</b><br>by Dan Brown</a></p>
                </div>
                <div>
                    <img src="dist/Images/iam.jpg" class="img-books"><br>
                    <p class="book-link"><a href="#book" class="book-link"><b>I Am Malala</b><br>by Malala
                            Yousafzai</a></p>
                </div>
                <div>
                    <img src="dist/Images/tbdate.jpg" class="img-books"><br>
                    <p class="book-link"><a href="#book" class="book-link"><b>They Both Die At The End</b><br>by
                            Adam Silvera</a></p>
                </div>
                <div>
                    <img src="dist/Images/cmbyn.jpg" class="img-books"><br>
                    <p class="book-link"><a href="#book" class="book-link"><b>Call Me By Your Name</b><br>by Andre
                            Aciman</a></p>
                </div>
            </div>
            <h2 class="text">MOST RECOMMENDED SERIES</h2>
            <div class="flex-row" id="series">
                <div class="flex-left">
                    <h2>Harry Potter Series - J.K.Rowling</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <a class="more" href="#.html">More&#129154;</a>
                </div>
                <div class="flex-right">
                    <img src="dist/Images/hp-series.png" id="HP"><br>
                </div>
            </div>
            <h2 class="text">NEWEST IN OUR WEBSITE</h2>
            <div class="flex-row" id='purchased'>
                <div class="flex-left">
                    <h2><?php echo $lastbook[0] ['Title']?></h2>
                    <p><?php echo $lastbook[0] ['Description']?></p>
                    <a class="more" href="book.php?title=<?php echo $lastbook[0]['Title'];?>">More&#129154;</a>
                </div>
                <div class="flex-right ">
                <?php  if ($lastbook [0] ['Image']): ?>
                                <img class="img-books"id="WTCS" src="<?php echo $lastbook [0] ['Image']; ?>" >
                            <?php else: ?>
                                    <p>No image Selected</p>
                            <?php endif?>  <br>
                </div>
            </div>
        </div>
    </main>
    <?php 
include "Components/footer.php";
    ?>
<script type="text/javascript" src="dist/js/main.js"></script>