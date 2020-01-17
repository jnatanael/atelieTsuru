<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */
?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Menu Principal', ATELIE_THEME_NAME ); ?>">
	<div class="nav-wrapper container">
		<a id="logo-container" href="#" class="brand-logo">
			<?php
			the_custom_logo();
			?>
		</a>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'top',
			'depth' => 2,
			'container' => false,
			'menu_id' => 'top-menu',
			'menu_class' => 'right hide-on-med-and-down'
		) );
		wp_nav_menu( array(
			'theme_location' => 'top',
			'depth' => 2,
			'container' => false,
			'menu_id' => 'nav-mobile',
			'menu_class' => 'side-nav'
		) );
		?>
		<a href="#" data-activates="nav-mobile" class="button-collapse">xxx</a>
	</div>
</nav><!-- #site-navigation -->
