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
 * Template name: Lista de Produtos
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
	<?php
	while ( have_posts() ) : the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<main class="container">
				<div id="contentProduto">
					<?php
					the_content();
					?>
				</div>

				<div class="row" id="listProdutos">
					<?php
                    // Pegar todos os produtos
					$produtos = array('post_type' => 'produtos', 'posts_per_page' => 99, 'order' => 'ASC');
					$produtosLoop = new WP_Query($produtos);
					while ($produtosLoop->have_posts()) :
						$produtosLoop->the_post();
						?>
						<div class="col s12 m6 l4 center">
							<div class="card">
								<div class="card-image">
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="waves-effect waves-light">
										<?php the_post_thumbnail('', array('class' => 'responsive-img')); ?>
									</a>
								</div>
								<div class="card-content">
									<h3 class="card-title"><?php the_title(); ?></h3>
									<?php echo atelie_excerpt(20); ?>
								</div>
								<div class="card-action">
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="btn waves-effect waves-light">
										Conheça <span class="material-icons mbri-cursor-click"></span>
									</a>
								</div>
							</div>
						</div>
						<?php
					endwhile;
					wp_reset_query();
					?>
				</div><!-- .entry-content -->
				<?php atelie_edit_link( get_the_ID() ); ?>
			</main>
		</article><!-- #post-## -->
		<?php
	endwhile; // End of the loop.
	?>
</section>

<?php
require_once ('atelie/components/ctaPage.php');
get_footer();
