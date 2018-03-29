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
    <?php $posts = get_post();
        foreach ($posts as $post) {
            echo $post;
        }
    ?>
</main>
<?php
    get_template_part('footer');




?>
