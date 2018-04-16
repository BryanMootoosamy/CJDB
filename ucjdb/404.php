<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _CJDB
 */
// get_header();
require "head.php";
if (!is_singular()) {
        get_template_part('header');
    } else {
        get_template_part("headerBurger");
    }
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="404-content-wrap">
					<div class="404-content-header">
						<div class="logo-404"><h1>404</h1></div>
						<p>It looks like nothing was found at this location. Maybe try a search?</p>
					</div><!-- .404-content-header -->
				<?php get_search_form(); ?>
		</div><!-- .404-content-wrap -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
