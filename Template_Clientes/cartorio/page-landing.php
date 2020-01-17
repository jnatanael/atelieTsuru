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
 * Template name: Landing Page
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */
get_header();
?>
<section id="contentPage">
	<main>
		<?php
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<section class="entry-content">
					<?php
					the_content();
					atelie_edit_link( get_the_ID() );
					?>
			</section><!-- .entry-content -->
		</article>
	</main>
</section>

<?php
get_footer();
