<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */
get_header();
?>

<header class="parallax-container valign-wrapper" id="headerPage">
	<div class="container">
	<?php
		if ( have_posts() ) :
			the_archive_title( '<h1>', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
		endif;
		?>
	</div>
	<div class="parallax">
	<img src="<?php bloginfo('template_url'); ?>/assets/img/erro404.png" alt="Background Erro 404">
	</div>
</header>

<section id="contentPage" class="blogPage">
	<main class="container">
		<div class="row">
			<div class="col s12 m8 l8">
				<?php
				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'template/post/content', get_post_format() );

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
	</main>
</section>
<?php
require_once ('atelie/components/ctaPage.php');
get_footer();
