<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _CJDB
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer">
		<section class="top">
                <div class="categories">
                    <?php $arg = array('hide_empty' => FALSE); wp_list_categories($arg); ?>
                </div>
                <div class="popularPosts">
					<?php
                        $args = array(
                            'header' => 'Popular Posts',
                            'header_start' => '<h3>',
                            'header_end' => '</h3>',
                            'limit' => 3,
                            'thumbnail_width' => 105,
                            'thumbnail_height' => 80,
                            'stats_views' => 0,
                            'post_html' => '<li>{thumb} <a href="{url}">{text_title}</a></li>'
                        );
                    wpp_get_mostpopular( $args );
                    ?>
                </div>
                <div class="instagram">
                    <?php echo do_shortcode('[instagram-feed]'); ?>
                </div>
            </section>
            <section class="bottom">
                <div class="footerSocialLink">
                    <ul>
                        <li><button type="button" name="button"><i class="fab fa-facebook-f"></i></button></li>
                        <li><button type="button" name="button"><i class="fab fa-twitter"></i></button></li>
                        <li><button type="button" name="button"><i class="fab fa-instagram"></i></button></li>
                    </ul>
                </div>
            </section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
  <script src="/upup.min.js"></script>
  <script>
    UpUp.start({
      'content': '<html><body><h1>FooDOg</h1><p>"I'm out for a walk, I'll be back soon."</p></body></html>'
    });
  </script>
</body>
</html>
