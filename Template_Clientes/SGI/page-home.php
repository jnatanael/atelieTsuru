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
 * Template name: Home Page
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
		<?php
		while ( have_posts() ) : the_post();
			?>
			<div id="post-<?php the_ID(); ?>">
				<article>
					<div class="entry-content container">
						<?php
						the_content();
						atelie_edit_link( get_the_ID() );
						?>
					</div><!-- .entry-content -->
				</article>
				<div id="prodService">
					<header class="container">
						<h2>Somos especialistas em soluções inteligentes e viáveis para obras de todos os portes</h2>
						<div class="row">
							<div class="col s4">
								<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/casas.png" class="responsive-img" alt="Ícone Casas">
								<h4>casas</h4>
							</div>
							<div class="col s4">
								<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/loteamentos.png" class="responsive-img" alt="Ícone Loteamentos">
								<h4>loteamentos</h4>

							</div>
							<div class="col s4">
								<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/predios.png" class="responsive-img" alt="Ícone Prédios">
								<h4>prédios</h4>
							</div>
						</div>
					</header>
				</div>
				<div id="slideProdutos" class="carousel carousel-slider">

					<?php
                    // Pegar todos os produtos
					$produtos = array('post_type' => 'produtos', 'posts_per_page' => 4, 'order' => 'ASC');
					$produtosLoop = new WP_Query($produtos);
					while ($produtosLoop->have_posts()) :
						$produtosLoop->the_post();
						?>

						<div class="carousel-item valign-wrapper" href="#prod-<?php the_ID(); ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
							<div class="container caption">
								<section>
									<h2><?php the_title(); ?></h2>
									<?php echo atelie_excerpt(20); ?>
								</section>
								<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="btn btn-large waves-effect waves-light">
									Conheça agora mesmo! <span class="material-icons mbri-cursor-click"></span>
								</a>
							</div>
						</div>
						<?php
					endwhile;
					wp_reset_query();
					?>
				</div>
			</div><!-- #post-## -->
			<?php
		endwhile; // End of the loop.
		?>
	</main>
</section>

<?php
require_once ('atelie/components/ctaPage.php');
get_footer();
