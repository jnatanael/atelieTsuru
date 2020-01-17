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

$options = get_atelie_theme_options();
?>

</main>
<footer class="page-footer">
	<aside class="widget-area" id="widgets" role="complementary" aria-label="<?php esc_attr_e( 'Footer', ATELIE_THEME_NAME ); ?>">
		<section class="container">
			<div class="row valign-wrapper">
				<div class="col s12 m4 wow fadeInLeft">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'bottom',
						'depth' => 2
					) );
					?>
				</div>
				<div class="col s12 m4 wow fadeInDown">
					<address>
						<span class="mbri-map-pin"></span> <?php echo $options['endereco']; ?><br>
						<span class="mbri-pin"></span> <?php echo $options['bairro'].' | '.$options['cidade'].'/'.$options['estado']; ?><br>
						<a href="mailto:<?php echo $options['email']; ?>" title="Enviar email para <?php echo $options['email']; ?>"><span class="mbri-letter"></span> <?php echo $options['email']; ?></a><br>
						<a href="telto:<?php echo $options['telefone']; ?>" title="Ligar para <?php echo $options['telefone']; ?>"><span class="mbri-touch"></span> <?php echo $options['telefone']; ?></a>
					</address>
				</div>
				<div class="col s12 m4 center-align wow fadeInRight">
					<?php
					the_custom_logo();
					?>
				</div>

			</div>
		</section>
	</aside>
	<div id="copyrightAssinatura" class="footer-copyright center-on-small-only">
		<section class="container">
			<div class="row">
				<div class="col s12 m7 wow fadeInLeft">
					<p>
						<?php atelie_copyright(); ?> | <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a> |
						<?php
						if ( function_exists( 'the_privacy_policy_link' ) ) {
							the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
						}
						?>
					</p>
				</div>
				<div class="col s12 m5 right-align  wow fadeInRight">
					<p>
						Desenvolvido com <span class="mbri-hearth"></span> e <span class="mbri-hot-cup"></span> por <a href="https://www.ateliesolutions.com.br" target="_blank" title="Desenvolvido por Ateliê Solutions">Ateliê Solutions.</a>
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
