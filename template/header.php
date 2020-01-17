<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0
 */
?>
<div class="custom-header">
	<div class="site-branding">
		<div class="custom-header-media">
			<?php the_custom_header_markup(); ?>
		</div>
		<?php
		the_custom_logo();
		if ( is_front_page() && is_home() ) :
			?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
		else :
			?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php
		endif;
		$atelie_description = get_bloginfo( 'description', 'display' );
		if ( $atelie_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo $novotheme_description; /* WPCS: xss ok. */ ?></p>
		<?php endif; ?>
	</div><!-- .site-branding -->

</div><!-- .custom-header -->
