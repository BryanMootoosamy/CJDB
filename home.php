<!-- affiche le burger si singular -->
<?php
    //Template Name: Home
    get_template_part('head');
    if (!is_singular()) {
        get_template_part('header');
    } else {
        get_template_part("headerBurger");
    }
?>
<?php
    get_sidebar();
?>
<?php
    get_footer();
?>
