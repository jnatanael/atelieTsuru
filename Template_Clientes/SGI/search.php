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

<header class="parallax-container" id="headerPage">
	<div class="container">
		<div class="wow slideInLeft">
			<h1>Resultado de Pesquisa</h1>
		</div>
		<div class="wow zoomInDown">
			<a href="#content" id="scrollPage">
				<span class="scroll"></span>
			</a>
		</div>
	</div>
	<div class="parallax">
		<img src="<?php bloginfo('template_url'); ?>/assets/img/erro404.png" alt="Background Erro 404">
	</div>
</header>

<b id="content"></b>

<section id="contentPage">
	<article id="resultadoPesquisa">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<h2 class="page-title"><?php printf( __( 'Resultados de Pesquisa para: %s', ATELIE_THEME_NAME ), '<strong>' . get_search_query() . '</strong>' ); ?></h2>
				<?php else : ?>
					<h2 class="page-title"><?php _e( 'Nenhum resultado encontrado!', ATELIE_THEME_NAME ); ?></h2>
					<?php
				endif;

				echo "<hr><hr>";

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
		</article>
	</section>

	<?php
	get_footer();
