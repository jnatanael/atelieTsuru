<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0
 */
$unique_id = esc_attr( uniqid( 'search-form-' ) );
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>">
		<?php echo _x( 'Pesquisar...', 'label', ATELIE_THEME_NAME ); ?>
	</label>
	<input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Pesquisar...', 'placeholder', ATELIE_THEME_NAME ); ?>" value="<?php echo get_search_query(); ?>" name="s"  title="<?php echo __( 'Pesquisar por:', ATELIE_THEME_NAME ); ?>" />
	<button type="submit" class="search-submit">xxx <span class="screen-reader-text"><?php echo _x( 'Pesquisar', 'submit button', ATELIE_THEME_NAME ); ?></span></button>
</form>