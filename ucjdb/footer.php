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

	</div><!-- content -->
	<footer>
		<div class="top">
            <div class="categories">
                <?php $arg = array('hide_empty' => FALSE); wp_list_categories($arg); ?>
            </div><!-- categories -->
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
            </div><!-- popularPosts -->
            <div class="footer_instagram">
                <div class="footer_instagram_title">
                    <h3>instagram</h3>
                </div>
                <div class="footer_instagram_gallery">
                    <div class="footer_instagram_gal_pics">
                        <a href="https://www.instagram.com/p/BhpG33JAgil/" target="_blank"><img src="https://scontent.cdninstagram.com/vp/ea3a5001e5827c35edb0d55854df5a6a/5B655CDA/t51.2885-15/s150x150/e35/c126.0.827.827/30077450_2040295322959895_4211302144822738944_n.jpg" alt=""></a>
                    </div>
                    <div class="footer_instagram_gal_pics">
                        <a href="https://www.instagram.com/p/BhVIzLNgbde/" target="_blank"><img src="https://scontent.cdninstagram.com/vp/89cb97ec9838fca1480ce27260175efd/5AD8B072/t51.2885-15/s150x150/e15/c236.0.607.607/29714891_187480992044239_2078762612190871552_n.jpg" alt=""></a>
                    </div>
                    <div class="footer_instagram_gal_pics">
                        <a href="https://www.instagram.com/p/BhO625dA1MD/" target="_blank"><img src="https://scontent.cdninstagram.com/vp/df588022a002761f43408c11defbe36c/5B53E154/t51.2885-15/s150x150/e35/c50.0.980.980/29716807_576408086068353_6569625896297168896_n.jpg" alt=""></a>
                    </div>
                    <div class="footer_instagram_gal_pics">
                        <a href="https://www.instagram.com/p/BhH8ddFgNiI/" target="_blank"><img src="https://scontent.cdninstagram.com/vp/9f50db150b526c920e726a8802b67593/5B655499/t51.2885-15/s150x150/e35/c0.135.1080.1080/29403586_1482833098494708_530892227329654784_n.jpg" alt=""></a>
                    </div>
                    <div class="footer_instagram_gal_pics">
                        <a href="https://www.instagram.com/p/Bg4OspHATH-/" target="_blank"><img src="https://scontent.cdninstagram.com/vp/b829f7c71c5a4f2152f763290c64a0dd/5B6FC953/t51.2885-15/s150x150/e35/29093993_2056346077769181_4414213511035486208_n.jpg" alt=""></a>
                    </div>
                    <div class="footer_instagram_gal_pics">
                        <a href="https://www.instagram.com/p/Bgw_REEgr8H/" target="_blank"><img src="https://scontent.cdninstagram.com/vp/5c6e275bf0e7f9019edda3bcfd0d7323/5B636744/t51.2885-15/s150x150/e35/c108.0.864.864/29094596_185888808802482_7747986354759270400_n.jpg" alt=""></a>
                    </div>
                    <div class="footer_instagram_gal_pics">
                        <a href="https://www.instagram.com/p/BgpEA5cA_lQ/" target="_blank"><img src="https://scontent.cdninstagram.com/vp/9e55bd47544c0f1cac3104e7771ac324/5B5818FA/t51.2885-15/s150x150/e35/c0.132.1080.1080/29414648_1766434486735791_8866084419148972032_n.jpg" alt=""></a>
                    </div>
                    <div class="footer_instagram_gal_pics">
                        <a href="https://www.instagram.com/p/BgNFsu9AAfw/" target="_blank"><img src="https://scontent.cdninstagram.com/vp/7efd63df70dc91cd9beb21722160cbe2/5B5C7E48/t51.2885-15/s150x150/e35/c0.99.1080.1080/28752472_150421005776558_8059956746027794432_n.jpg" alt=""></a>
                    </div>
                    <div class="footer_instagram_gal_pics">
                        <a href="https://www.instagram.com/p/BgFAfTJgOCz/" target="_blank"><img src="https://scontent.cdninstagram.com/vp/aa9e0beed7db9ca5b67557990dd5c773/5B603A46/t51.2885-15/s150x150/e35/c0.135.1080.1080/28428137_218764855340569_2463520879376596992_n.jpg" alt=""></a>
                    </div>
                </div><!-- footer_instagram_gallery -->
            </div><!-- footer_instagram -->
        </div><!-- top -->
        <div class="bottom">
            <div class="footerSocialLink">
                <ul>
                    <li><button type="button" name="button"><i class="fab fa-facebook-f"></i></button></li>
                    <li><button type="button" name="button"><i class="fab fa-twitter"></i></button></li>
                    <li><button type="button" name="button"><i class="fab fa-instagram"></i></button></li>
                </ul>
            </div>
        </div><!-- bottom -->
	</footer><!-- site-footer -->
</div><!-- page -->

<?php wp_footer(); ?>
<!--   <script src="/upup.min.js"></script>
  <script>
    UpUp.start({
      'content': '<html><body><h1>FooDOg</h1><p>Out for a walk</p></body></html>'
    });
  </script> -->
</body>
</html>
