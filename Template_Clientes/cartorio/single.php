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
the_post();
?>

<header class="parallax-container valign-wrapper singleBlog" id="headerPage">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<div class="infoPost">
				<?php atelie_posted_on() ?>
			</div>
	</div>
	<div class="parallax">
		<?php the_post_thumbnail(); ?>
	</div>
</header>

<section id="contentPage" class="blogPage">
	<main class="container">
		<div class="row">
			<div class="col s12 m10 offset-m1">
				<?php
					get_template_part( 'template/post/content', 'single' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
			?>
		</div>
	</div>
</main>
</section>

<?php
require_once ('atelie/components/ctaPage.php');
get_footer();
