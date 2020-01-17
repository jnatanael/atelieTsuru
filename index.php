<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */
get_header();
?>

<section>
	<main class="container">
		<div class="row">
			<div class="col s12 m8 l8">
				<?php
				if ( have_posts() ) :
					?>
					<header class="page-header">
						<?php
						if ( is_home() && !is_front_page() ) :
							?>
						<h1 class="page-title"><?php single_post_title(); ?></h1>
						<?php else : ?>
							<h2 class="page-title"><?php _e( 'Posts', 'atelie_tsuru' ); ?></h2>
							<?php
						endif;
						?>
					</header>
					<?php
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
