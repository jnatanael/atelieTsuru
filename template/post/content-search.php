<?php
/**
 * Template part for displaying results in search pages
 *
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">

        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail() ?>
        </a>

		<?php
		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				atelie_posted_on();
				?>
			</div><!-- .entry-meta -->
			<?php
		endif;
		?>
    </header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

    <footer class="entry-footer">
		<?php atelie_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
