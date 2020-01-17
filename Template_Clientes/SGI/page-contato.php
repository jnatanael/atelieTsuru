<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * Template name: Contato
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */
get_header();
?>

<header class="parallax-container" id="headerPage">
	<div class="container">
		<div class="wow slideInLeft">
			<?php $enableFraseDestaque = get_post_meta(get_the_ID(), '_atelieDestaque', true); ?>
			<?php echo $enableFraseDestaque; ?>
		</div>
		<div class="wow zoomInDown">
			<a href="#content" id="scrollPage">
				<span class="scroll"></span>
			</a>
		</div>
	</div>
	<div class="parallax">
		<?php the_post_thumbnail(); ?>
	</div>
</header>

<b id="content"></b>

<section id="contentPage">
	<main id="pageContato">
		<?php
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content container">
				<div class="row">
					<div class="col s12 m6" id="infoContato">
						<blockquote class="wow slideInLeft"
							<p>Entre em contato conosco agora mesmo e tire todas as suas dúvidas diretamente com nosso consultor!</p>
						</blockquote>
						<div class="cartao">
							<div class="row valign-wrapper">
								<div class="col s12 m3 wow slideInDown">
									<?php
									the_custom_logo();
									?>
								</div>
								<div class="col s12 m9 wow slideInRight">
									<address>
										<span class="mbri-map-pin"></span> <?php echo $options['endereco']; ?><br>
										<span class="mbri-pin"></span> <?php echo $options['bairro'].' | '.$options['cidade'].'/'.$options['estado']; ?><br>
										<a href="mailto:<?php echo $options['email']; ?>" title="Enviar email para <?php echo $options['email']; ?>"><span class="mbri-letter"></span> <?php echo $options['email']; ?></a><br>
										<a href="telto:<?php echo $options['telefone']; ?>" title="Ligar para <?php echo $options['telefone']; ?>"><span class="mbri-touch"></span> <?php echo $options['telefone']; ?></a>
									</address>
								</div>
							</div>
						</div>
						<div id="mapa" class="wow slideInDown">
							<?php echo $options['googleMaps']; ?>
						</div>
						<?php
						atelie_edit_link( get_the_ID() );
						?>
					</div>
					<div class="col s12 m6 wow slideInDown" id="formulario">
						<?php
						the_content();
						?>
					</div>
				</div><!-- .entry-content -->
			</div>
		</article><!-- #post-## -->
	</main>
</div>

<?php
get_footer();
