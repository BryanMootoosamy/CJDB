<?php
    get_template_part('head');
    if (!is_singular()) {
        get_template_part('header');
    } else {
        get_template_part("headerBurger");
    }
?>

<div class="page-404-content-wrap">
    <div class="page-404-content-header">
        <div class="logo-404 post-title"><h1>404</h1></div>
        <p>It looks like nothing was found at this location. Maybe try a search?</p>
    </div>
    <div class="ruby-search">
        <?php get_search_form(); ?>
    </div>
</div>

<?php
    get_footer();
?>