<?php
/**
   * Template for displaying search forms
  * @package CJDB
  * @since cjdb 0.1
  */
?>
	<fieldset>
		<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
			<label>
<!-- 				<p>
					<input type="hidden" name="post_type[]" value="articles" />
					<input type="hidden" name="post_type[]" value="post" />
				</p> -->
				<input type="search" class="search-field"
					placeholder="<?php echo esc_attr_x( 'Search and hit enter…', 'placeholder' ) ?>"
					value="<?php echo get_search_query() ?>" name="s"
					/>
			</label>
					<i class="fas fa-search"></i>
		</form>
	</fieldset>

<!-- 			<span class="ruby-search-input"><input class="field" placeholder="Search and hit enter…" value="" name="s" title="Search for:" type="text"></span>
		<span class="ruby-search-submit"><input value="" type="submit"><i class="fa fa-search"></i></span> -->
