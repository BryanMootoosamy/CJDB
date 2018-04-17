<?php
require "head.php";
if (!is_singular()) {
        get_template_part('header');
    } else {
        get_template_part("headerBurger");
    }
?>


<div class="realCategory">
  <h2><?php the_category(' '); ?></h2>
</div>

<section class="featured--posts">
    <div class="featured--grid">
    <?php
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'community',
        'posts_per_page' => 8
      );
      $arr_posts = new WP_Query( $args );

      if ( $arr_posts->have_posts() ) :
        while( $arr_posts->have_posts() ):
          $arr_posts->the_post();
    ?>
    <div class="featured">
      <div class="featured--img">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('featured'); ?>
        </a>
      </div>
      <div class="featured--txt">
        <div class="categories">
          <?php the_category( ' ' ); ?>
        </div>
        <h4>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h4>
          <?php the_excerpt(); ?>
      </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
      <div class="featured--grid0">
    <div class="featured--media">
      <?php get_sidebar(); ?>
    </div>

  </div>
</section>
</div>
<?php get_footer(); ?>
