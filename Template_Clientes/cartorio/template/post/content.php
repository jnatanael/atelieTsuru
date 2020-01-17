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
		<div class="card-image">
			<?php the_post_thumbnail('all',array('class'=>'responsive-img')) ?>
			<span class="card-title">
				<?php atelie_posted_on() ?>
			</span>
		</div>
		<div class="card-content">
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute() ?>"><?php the_title() ?></a></h2>
			<?php atelie_excerpt(50) ?>
		</div>
		<div class="card-action">
			<a href="<?php the_permalink(); ?>" class="btn waves-effect" title="<?php the_title_attribute(); ?>">
					Continue Lendo <span class="mbri-right"></span>
			</a>
		</div>
</article>
