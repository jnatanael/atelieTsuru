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

<div id="post-<?php the_ID(); ?>" class="wow slideInLeft">
    <?php
    the_title(sprintf('<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h4>');
    if ('post' === get_post_type()) :
        ?>
        <div class="entryMeta">
            <?php
            atelie_posted_on();
            ?>
        </div><!-- .entry-meta -->
        <?php
    endif;
    the_excerpt();
    ?>
    <hr>
</div><!-- #post-## -->