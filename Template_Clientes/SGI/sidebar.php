<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */
if ( !is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<aside id="sidebar" class="widget-area" aria-label="<?php esc_attr_e( 'Blog Sidebar', ATELIE_THEME_NAME ); ?>">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside><!-- #secondary -->