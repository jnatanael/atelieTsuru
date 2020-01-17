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

<header>
	<div class="container">
		<h1>Resultados de Pesquisa</h1>
	</div>
</header>

<?php require_once ('atelie/components/breadcrumbs.php'); ?>

<section id="resultadoPesquisa">
	<div class="container">
		<div class="row">
			<div class="col s12 m8 l8">
				<?php if ( have_posts() ) : ?>
					<h2 class="page-title"><?php printf( __( 'Resultados de Pesquisa para: %s', ATELIE_THEME_NAME ), '<strong>' . get_search_query() . '</strong>' ); ?></h2>
				<?php else : ?>
					<h2 class="page-title"><?php _e( 'Nenhum resultado encontrado!', ATELIE_THEME_NAME ); ?></h2>
				<?php
				endif;

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
			<div class="col s12 m4 l4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
