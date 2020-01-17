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
		<h1 class="wow slideInLeft"><strong><?php the_title(); ?></strong></h1>
		<a href="#content" id="scrollPage">
			<span class="scroll"></span>
		</a>
	</div>
	<div class="parallax">
		<?php the_post_thumbnail(); ?>
	</div>
</header>

<b id="content"></b>

<section id="contentPage">
	<?php
	if ( have_posts() ) :
		/* Start the Loop */
		the_post();
		get_template_part( 'template/post/content', 'produto');
	else :
		get_template_part( 'template/post/content', 'none' );
	endif;
	?>
</section>

<?php
require_once ('atelie/components/ctaPage.php');
get_footer();
