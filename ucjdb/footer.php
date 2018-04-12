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
                            'limit' => 3
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

</body>
</html>
