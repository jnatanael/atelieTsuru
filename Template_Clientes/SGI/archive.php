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

<header class="parallax-container" id="headerPage">
	<div class="container">
		<?php
		if ( have_posts() ) :
			the_archive_title( '<h1>', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
		endif;
		?>
	</div>
	<div class="parallax">
		<?php the_post_thumbnail(); ?>
	</div>
</header>

<?php require_once ('atelie/components/breadcrumbs.php'); ?>

<section id="contentPage">
	<main class="container">
		<div class="row">
			<div class="col s12 m8 l8">
				<?php
				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
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
get_footer();
