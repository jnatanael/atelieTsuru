<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */
get_header();
?>

<header class="parallax-container valign-wrapper" id="headerPage">
	<div class="container">
		<h1>Faça sua Pesquisa</h1>
		<br>
		<?php get_search_form(); ?>
	</div>
	<div class="parallax">
	<img src="<?php bloginfo('template_url'); ?>/assets/img/Pesquisar.jpg" alt="Background Erro 404">
	</div>
</header>

<section id="contentPage" class="blogPage">
	<article id="resultadoPesquisa">
		<div class="container">
			<div class="row">
				<div class="col s12 l8">
				<h4 class="page-title"><?php printf( __( 'Resultado de Pesquisa para: %s', ATELIE_THEME_NAME ), '<strong>' . get_search_query() . '</strong>' ); ?></h4>
				<?php
				echo "<hr>";

				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();
						get_template_part( 'template/post/content', 'search' );
					endwhile;
					atelie_pagination_funtion();
				else :
					get_template_part( 'template/post/content', 'none' );
				endif;
				?>
				</div>
				<div class="col s12 l4">
					<?php get_sidebar(); ?>
				</div>
			</div>
			</div>
		</article>
	</section>

	<?php
	require_once ('atelie/components/ctaPage.php');
	get_footer();
