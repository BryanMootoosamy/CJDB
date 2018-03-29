

<?php
define(IMG, 'wp-content/themes/CJDB/assets/images/');
?>

<?php
    //Template Name: 404 
?>

    <h4>Search Result For:</h4>
    <h1><strong>404</strong></h1>
    <p class="no-found"><strong>Oops! It looks Like Nothing Was Found!</strong></p>
    <p class="keyword-not-found">Sorry, but nothing matched your search terms. Please try again with some different keywords.</p> 
    <form class="search-product" method="GET" action="">
       <div class="search-div"> 
        <input type="search" name="search-keyword" placeholder="Search and hit enter ..."/>
        <button class="search-valid" type="submit" value=""> <img src="<?= IMG.'loupe.jpeg'?>" alt=""> </button>
       </div> 
    </form>
    
