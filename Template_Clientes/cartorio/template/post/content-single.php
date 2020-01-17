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

<article id="post-<?php the_ID(); ?>" class="card itemBlog">
		<div class="card-content">
			<h2><a href="<?php esc_url( get_permalink() ) ?>" rel="bookmark" title="<?php the_title_attribute() ?>"><?php the_title() ?></a></h2>
			<?php the_content() ?>
		</div>
		<div class="card-action">
			<div class="row">
			<?php $popular = new WP_Query(array( 'posts_per_page'=>2, 'meta_key'=>'popular_posts', 'orderby'=>'meta_value_num', 'order'=>'DESC'));
			while ($popular->have_posts()) : $popular->the_post(); ?>
			<div class="col s12 m6">
				<article id="post-<?php the_ID(); ?>" class="card popularBlog">
						<div class="card-image">
							<?php the_post_thumbnail('all',array('class'=>'responsive-img')) ?>
							<span class="card-title">
								<h3><a href="<?php esc_url( get_permalink() ) ?>" rel="bookmark" title="<?php the_title_attribute() ?>"><?php the_title() ?></a></h3>
							</span>
						</div>
						<div class="card-action">
							<a href="<?php the_permalink(); ?>" class="btn waves-effect" title="<?php the_title_attribute(); ?>">
									Leia Mais <span class="mbri-right"></span>
							</a>
						</div>
				</article>
			</div>
			<?php endwhile; wp_reset_query(); wp_reset_postdata(); ?>
		</div>
</article>
