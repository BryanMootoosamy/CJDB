<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _CJDB
 */

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:locale" content="en_US"/>
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="Foodog | Better living with your dog"/>
	<meta property="og:description" content="Health and wellness advice from vets and nutrition experts, DIY recipes and nutrition education, and a unique editorial perspective on what it means to love and live with your dog."/>
	<meta property="og:url" content="http://turing.claudejanssen.be/wp/"/>
	<meta property="og:site_name" content="FooDog"/>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>
