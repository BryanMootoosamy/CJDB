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
                    <h3>Popular Posts</h3>
					<?php wpp_get_mostpopular(); ?>
                </div>
                <div class="instagram">
                    <p>instagram api</p>
                </div>
            </section>
            <section class="bottom">
                <div class="footerSocialLink">
                    <ul>
                        <li><i class="fab fa-facebook-f"></i></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-instagram"></i></li>
                    </ul>
                </div>
            </section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
