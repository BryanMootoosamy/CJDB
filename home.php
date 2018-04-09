<?php
    //Template Name: Home
    get_template_part('head');
    if (!is_singular()) {
        get_template_part('header');
    } else {
        get_template_part("headerBurger");
    }
?>
<main>
<?php
// supprimer
get_template_part('404');
?>
</main>
<?php
    get_template_part('footer');




?>
