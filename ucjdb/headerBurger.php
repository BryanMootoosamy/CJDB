<body <?php body_class(); ?>>
<section class="headerBurger">
    <div class="left">
        <div id="menu" class="menu">
            <?php wp_nav_menu(); ?>
        </div>
        <button id="burger" name="burger" class="burger"><i class="fas fa-bars"></i></button>
        <script type="text/javascript">
            let div = document.getElementById("menu");
            let button = document.getElementById("burger");
            button.addEventListener("click",function (){div.classList.toggle("show")});
        </script>
        <h2><a href="<?php echo esc_url (home_url ('/')); ?>"><?php bloginfo( 'name' ); ?></a></h2>
    </div>
    <div class="center">
        <p>Digest In Your Inbox </p><form class="emailDigest" method="post">
            <input type="email" name="email" value=""><button type="submit" name="button">Sign Up</button>
        </form>
    </div>
    <div class="right">
        <div class="text">
            <p>The Farmer's Dog</p>
        </div>
        <div class="search">
            <i class="fas fa-search"></i>
        </div>
    </div>
</section>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ucjdb' ); ?></a>



	<div id="content" class="site-content">
  <div class="dorian--index--cat">
