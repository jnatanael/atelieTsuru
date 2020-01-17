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
 * Template name: Qualidade
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
	<main>
		<section id="politicaQualidade" style="background: #000">
			<div class="container">
				<h2 class="wow slideInDown">Política de Qualidade</h2>
				<div class="wow slideInDown">
					<?php echo $options['politicaQualidade']; ?>
				</div>
			</div>
		</section>

		<section id="missaVisaoValores">
			<div class="container">
				<div class="item wow slideInDown">
					<div class="titleItem">
						<h3>Missão</h3>
					</div>
					<div class="textItem">
						<p><?php echo $options['missao']; ?></p>
					</div>
				</div>
				<div class="item wow slideInDown">
					<div class="titleItem">
						<h3>Visão</h3>
					</div>
					<div class="textItem">
						<p><?php echo $options['visao']; ?></p>
					</div>
				</div>
				<div class="item wow slideInDown">
					<div class="titleItem">
						<h3>Valores</h3>
					</div>
					<div class="textItem">
						<?php echo $options['valores']; ?>
					</div>
				</div>
			</div>
		</section>
	</main>
</section>

<?php
require_once ('atelie/components/ctaPage.php');
get_footer();
