<?php
    //Template Name: Home
    get_template_part('head');
    if (!is_singular()) {
        get_template_part('header');
    } else {
        get_template_part("headerBurger");
    }
?>
    get_template_part('header');

    $test = 1;
    if ( have_posts() ) : while ( have_posts() && $test != 6 ) : the_post();
    $test = $test + 1;
    if (!isset($grid)) { ?>
    <main>
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
    </main>
<?php
    get_template_part('footer');




?>
