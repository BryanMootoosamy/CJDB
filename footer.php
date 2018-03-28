        <footer>
            <section class="top">
                <div class="categories">
                    <?php $arg = array('hide_empty' => FALSE); wp_list_categories($arg); ?>
                </div>
                <div class="popularPosts">
                    <h3>Popular Posts</h3>
                    <ul>
                    	<?php $popular = new WP_Query(array('posts_per_page'=>4, 'meta_key'=>'popular_posts', 'orderby'=>'meta_value_num', 'order'=>'DESC'));
                    	while ($popular->have_posts()) : $popular->the_post(); ?>
                    	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    	<?php endwhile; wp_reset_postdata(); ?>
                    </ul>
                </div>
                <div class="instagram">
                    <p>instagram api</p>
                </div>
            </section>
            <section class="bottom">

            </section>
            <?php wp_footer(); ?>
        </footer>
    </body>
</html>
