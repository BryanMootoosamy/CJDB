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
				<input type="search" class="search-field"
					placeholder="<?php echo esc_attr_x( 'Search and hit enter…', 'placeholder' ) ?>"
					value="<?php echo get_search_query() ?>" name="s"
					/>
			</label>
					<i class="fas fa-search"></i>
		</form>
	</fieldset>