<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage foodog
 * @since foodog 0.1
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="headerDog"class="headerDog">
            <div id="socialLink" class="socialLink">
                <ul>
                    <li><i class="fab fa-facebook-f"></i></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                    <li><i class="fas fa-search"></i></li>
                </ul>
            </div>
            <div class="title">
                <h1>FooDog</h1>
            </div>
            <div class="pageLink">
                <?php wp_nav_menu() ?>
            </div>
        </div>
    </body>
</html>
