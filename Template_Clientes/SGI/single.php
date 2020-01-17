<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */

get_header();
?>

<header class="parallax-container" id="headerPage">
	<div class="container">
		<?php the_title( '<h1 class="wow slideInLeft">', '</h1>' ); ?>
	</div>
	<div class="parallax">
		<?php the_post_thumbnail(); ?>
	</div>
</header>

<?php require_once ('atelie/components/breadcrumbs.php'); ?>

<section>
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

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
				endif;

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
