<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

<section class="featured--posts">
  <div class="featured--grid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php the_title(); ?>
    <?php the_content(); ?>

    <?php endwhile; ?>
    <?php endif; ?>
  </div>
<div class="featured--grid0">

  <?php get_sidebar(); ?>

</div>
</section>
</div><!-- dorian-index-cat -->
<?php
get_footer();
