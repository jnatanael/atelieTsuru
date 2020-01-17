<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */
if ( !is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<aside id="sidebar" class="widget-area" aria-label="<?php esc_attr_e( 'Blog Sidebar', ATELIE_THEME_NAME ); ?>">

	<?php dynamic_sidebar( 'sidebar' ); ?>

	<div id="widget-Fixo" class="widget">
	<h5>Mais Acessados</h5>
	<div class="row">
	<?php $popular = new WP_Query(array( 'posts_per_page'=>3, 'meta_key'=>'popular_posts', 'orderby'=>'meta_value_num', 'order'=>'DESC'));
			while ($popular->have_posts()) : $popular->the_post(); ?>
			<div class="col s12 m6 l12">
				<article id="post-<?php the_ID(); ?>" class="card popularBlog">
						<div class="card-image">
							<?php the_post_thumbnail('all',array('class'=>'responsive-img')) ?>
							<span class="card-title">
								<h3><a href="<?php esc_url( get_permalink() ) ?>" rel="bookmark" title="<?php the_title_attribute() ?>"><?php the_title() ?></a></h3>
							</span>
						</div>
				</article>
</div>
			<?php endwhile; wp_reset_query(); wp_reset_postdata(); ?>
	</div>
	</div>
</aside><!-- #secondary -->
