<?php
    function shapeSpace_popular_posts($post_id) {
    	$count_key = 'popular_posts';
    	$count = get_post_meta($post_id, $count_key, true);
    	if ($count == '') {
    		$count = 0;
    		delete_post_meta($post_id, $count_key);
    		add_post_meta($post_id, $count_key, '0');
    	} else {
    		$count++;
    		update_post_meta($post_id, $count_key, $count);
    	}
    }
    function shapeSpace_track_posts($post_id) {
    	if (!is_single()) return;
    	if (empty($post_id)) {
    		global $post;
    		$post_id = $post->ID;
    	}
    	shapeSpace_popular_posts($post_id);
    }
		add_action('wp_head', 'shapeSpace_track_posts');
/* °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°° */
/* Fonts, Scripts & Style */
/* °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°° */
	function add_theme_assets() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Crimson+Text|Open+Sans', false );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'prefix-font-awesome', 'https://use.fontawesome.com/releases/v5.0.9/js/all.js' );
	wp_enqueue_script( 'modal', get_template_directory_uri() . '/assets/js/modal.js' );
	}
	add_action( 'wp_enqueue_scripts', 'add_theme_assets' );

/* °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°° */
/* Sidebar */
/* °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°° */
/* 	if ( function_exists('register_sidebar') )
		register_sidebar(
		array(
			'id'=>'right',
			'name'=>'Right Sidebar',
			'description'=>'Sidebar on the right side',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
			)
		); */

function cjdb_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'cjdb' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'cjdb' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}
		add_action( 'widgets_init', 'cjdb_widgets_init' );
/* °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°° */
?>