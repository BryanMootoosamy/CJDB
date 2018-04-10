<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

<!-- Popular posts -->
<?php
$test = 1;
if ( have_posts() ) : while ( have_posts() && $test != 6 ) : the_post();
$test = $test + 1;
if (!isset($grid)) { ?>
<div class='section--main'>
<!-- à afficher pour les articles -->
<section class='section--popular'>
    <div class="grid">
      <div class="gridmain">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('big-one'); ?></a>
        <div class='categories'>
            <p><?php the_tags('', ', ', ''); ?></p>
        </div>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </div>
<?php $grid = 'ok'; } else { ?>
  <div class="grid2">
    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail(); ?>
  </a>
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  </div>

<?php } endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
</section>
</div>

	<div id="primary" class="content-area three-quarters">
		<main id="main" class="site-main grid-2 has-gutter">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
