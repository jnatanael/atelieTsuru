<?php
/**
 * The template for displaying content
 *
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->