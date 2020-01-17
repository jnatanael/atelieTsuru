<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */
?>

</div>
<footer class="page-footer">
	<aside class="widget-area" id="widgets" role="complementary" aria-label="<?php esc_attr_e( 'Footer', ATELIE_THEME_NAME ); ?>">
		<section class="container">
			<div class="row">
				<div class="col s12 m3 l3">
					<?php
					if ( is_active_sidebar( 'footer-area-1' ) ) {
						dynamic_sidebar( 'footer-area-1' );
					}
					?>
				</div>
				<div class="col s12 m3 l3">
					<?php
					if ( is_active_sidebar( 'footer-area-2' ) ) {
						dynamic_sidebar( 'footer-area-2' );
					}
					?>
				</div>
				<div class="col s12 m3 l3">

				</div>
				<div class="col s12 m3 l3">
					<?php require_once ('atelie/components/redes-sociais.php'); ?>
				</div>
			</div>
		</section>
	</aside>
	<div id="copyrightAssinatura" class="footer-copyright">
		<section class="container">
			<div class="row">
				<div class="col s12 m6 l6">
					<p>
						<?php atelie_copyright(); ?> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a> |
						<?php
						if ( function_exists( 'the_privacy_policy_link' ) ) {
							the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
						}
						?>
					</p>
				</div>
				<div class="col s12 m6 l6 right-align center-on-small-only">
					<p>
						Desenvolvido por <a href="https://www.ateliesolutions.com.br" target="_blank" title="Desenvolvido por Ateliê Solutions">Ateliê Solutions.</a>
					</p>
				</div>
			</div>
		</section>
	</div>
</footer>
<?php wp_footer(); ?>

<!--
	Desenvolvido por Ateliê Solutions - Creative and Authentic!
	:: www.ateliesolutions.com.br
	:: contato@ateliesolutions.com.br
	:: (35)9 9126 - 9829
-->

</body>
</html>
