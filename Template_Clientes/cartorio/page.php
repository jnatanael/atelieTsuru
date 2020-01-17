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

<header class="parallax-container valign-wrapper" id="headerPage">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="parallax">
		<?php the_post_thumbnail(); ?>
	</div>
</header>

<section id="contentPage">
	<?php
	while ( have_posts() ) : the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<main class="entry-content">
				<?php
				the_content();
				atelie_edit_link( get_the_ID() );
				?>
			</main>
		</article><!-- #post-## -->
		<?php
	endwhile; // End of the loop.
	?>
</section>

<?php
require_once ('atelie/components/ctaPage.php');
get_footer();
