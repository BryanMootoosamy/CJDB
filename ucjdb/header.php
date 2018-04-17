

<body <?php body_class(); ?>>
	<div id="headerDog" class="headerDog">
            <div class="headerTop">
                <div id="socialLink" class="socialLink">
                    <ul>
                        <li><i class="fab fa-facebook-f"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-instagram"></i></li>
                        <li><i class="fas fa-search"></i></li>
                    </ul>
                </div>
                <div class="title">
                    <h1><a href="<?php echo esc_url (home_url ('/')); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                </div>
            </div>
            <div class="pageLink">
                <?php wp_nav_menu(); ?>
            </div>
	</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ucjdb' ); ?></a>



	<div id="content" class="site-content">
	<div class="dorian--index--cat">
