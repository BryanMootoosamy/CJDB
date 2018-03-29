<?php
    //Template Name: Search Page
    get_template_part('head');
    if (!is_singular()) {
        get_template_part('headerBurger');
    }
?>
<main>
  <?php get_search_form(); ?>
</main>
<?php
    get_template_part('footer');
?>
