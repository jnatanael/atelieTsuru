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

<header class="parallax-container valign-wrapper" id="headerPage">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="parallax">
		<?php the_post_thumbnail(); ?>
	</div>
</header>

<section id="contentPage">
	<main id="pageContato">
		<?php
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content container">
				<div class="row">
					<div class="col s12 m6" id="infoContato">
						<blockquote>
							<p>Entre em contato conosco agora mesmo e tire todas as suas dívidas diretamente com nosso consultor!</p>
						</blockquote>
						<div class="cartao">
							<address>
								<span class="mbri-map-pin"></span> <?php echo $options['endereco']; ?><br>
								<span class="mbri-pin"></span> <?php echo $options['bairro'].' | '.$options['cidade'].'/'.$options['estado']; ?><br>
								<a href="mailto:<?php echo $options['email']; ?>" title="Enviar email para <?php echo $options['email']; ?>"><span class="mbri-letter"></span> <?php echo $options['email']; ?></a><br>
								<a href="telto:<?php echo $options['telefone']; ?>" title="Ligar para <?php echo $options['telefone']; ?>"><span class="mbri-touch"></span> <?php echo $options['telefone']; ?></a>
							</address>
						</div>
						<div id="mapa">
			<?php echo $options['googleMaps']; ?>
		</div>
					</div>
					<div class="col s12 m6" id="formulario">
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
require_once ('atelie/components/ctaPage.php');
get_footer();
