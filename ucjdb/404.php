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
<main class="Page404">
	<div class="text">
		<h4>404</h4>
		<p>It looks like nothing was found at this location. Maybe try a search?</p>
	</div>
	<div class="search">
		<?php get_search_form(); ?>
	</div>
</main>
<?php get_footer(); ?>
