<?php
/**
   * Template for displaying search forms
  * @package FooDog
  * @since FooDog 0.1
  */
?>

  <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

  <label>
    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'foodog' ); ?></span>
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'foodog' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  </label>

  <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'foodog' ); ?></span></button>

</form>

<!-- a tester, simpler way
<fieldset>
<legend>Recherche</legend>
<label>
<input type="text"
name="s" value="#" id="recherche"
/>
</label>
<input type="submit" id="votre-id" value="Chercher" />
</fieldset>
</form> -->
