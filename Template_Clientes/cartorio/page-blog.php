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
 * Template name: Blog
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */
get_header();
the_post();
?>

<header class="parallax-container valign-wrapper" id="headerPage">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<div class="description">
		<?php
				the_content();
				?>
		</div>
	</div>
	<div class="parallax">
		<?php the_post_thumbnail(); ?>
	</div>
</header>

<section id="contentPage" class="blogPage">
	<div class="container">
		<div class="row">
			<div class="col s12 l8">
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$postagens = array('post_type' => 'post','posts_per_page' => 4, 'paged'=>$paged);
				$postagensLoop = new WP_Query($postagens);
				if ( $postagensLoop->have_posts() ) :
					/* Start the Loop */
					while ( $postagensLoop->have_posts() ) : $postagensLoop->the_post();
						get_template_part( 'template/post/content', get_post_format() );
					endwhile;

					atelie_pagination_funtion($postagensLoop);
				else :
					get_template_part( 'template/post/content', 'none' );
				endif;
				// wp_reset_query();
				?>
			</div>
			<div class="col s12 l4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php
require_once ('atelie/components/ctaPage.php');
get_footer();
