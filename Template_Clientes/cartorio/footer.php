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
<footer id="footerSite" class="page-footer">
	<aside class="widget-area" id="widgets" role="complementary" aria-label="<?php esc_attr_e( 'Footer', ATELIE_THEME_NAME ); ?>">
		<section class="container center-align">
			<div class="logotipo">
				<?php
				the_custom_logo();
				?>
				<br>
				<?php require_once('atelie/components/redes-sociais.php'); ?>
			</div>

			<?php
				wp_nav_menu( array(
					'theme_location' => 'top',
					'depth' => 2,
					'menu_id'=>'menu-rodape'
				) );
			?>

			<address>
				<span class="mbri-map-pin"></span> <?php echo $options['endereco']; ?>, <?php echo $options['bairro'].' | '.$options['cidade'].'/'.$options['estado']; ?><br>
				<a href="mailto:<?php echo $options['email']; ?>" title="Enviar email para <?php echo $options['email']; ?>"><span class="mbri-letter"></span> <?php echo $options['email']; ?></a><br>
				<a href="telto:<?php echo $options['telefone']; ?>" title="Ligar para <?php echo $options['telefone']; ?>"><span class="mbri-touch"></span> <?php echo $options['telefone']; ?></a>
			</address>
		</section>
	</aside>
	<div id="copyrightAssinatura" class="footer-copyright center-on-small-only">
		<section class="container">
			<div class="row">
				<div class="col s12 l7">
					<p>
						<?php atelie_copyright(); ?> | <a href="/termos-e-condicoes" rel="home" title="Termos e Condições <?php bloginfo( 'name' ); ?>">Termos e Condições</a> |
						<?php
						if ( function_exists( 'the_privacy_policy_link' ) ) {
							the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
						}
						?>
					</p>
				</div>
				<div class="col s12 l5 right-align">
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
