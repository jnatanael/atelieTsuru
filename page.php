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
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */
get_header();
?>

<header>
	<div class="container">
		<?php the_post_thumbnail( 'all', array( 'class' => 'responsive-img' ) ); ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</div>
</header>

<?php require_once ('atelie/components/breadcrumbs.php'); ?>

<section>
	<main class="container">
		<?php
		while ( have_posts() ) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<?php
					the_content();
					atelie_edit_link( get_the_ID() );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</main>
</section>

<?php
get_footer();
