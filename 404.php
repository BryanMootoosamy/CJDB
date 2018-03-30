

<?php
define(IMG, 'wp-content/themes/CJDB/assets/images/');
?>

<?php
    //Template Name: 404 
?>
<main class="main-404">
    <h4>Search Result For:</h4>
    <h1>404</h1>
    <p class="no-found">Oops! It looks Like Nothing Was Found!</p>
    <p class="keyword-not-found">Sorry, but nothing matched your search terms. Please try again with some different keywords.</p> 
    <form class="search-product" method="GET" action="">
       <div class="search-div"> 
        <label for="search">
            <input type="search" name="search-keyword" id="search" placeholder="Search and hit enter ..."/>
            <button class="search-valid" type="submit" id="search" value=""><i class="fas fa-search"></i></button>
        </label>
       </div> 
    </form>
</main>    
