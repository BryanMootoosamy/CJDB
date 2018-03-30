<?php
    //Template Name: Home
    get_template_part('head');
    if (!is_singular()) {
        get_template_part('header');
    } else {
        get_template_part("headerBurger");
    }
?>
<<<<<<< HEAD
<main>
    
</main>
=======

>>>>>>> b1b2aa9fa28ab8629d96f667daef76101368019e
<?php
    get_template_part('footer');




?>
