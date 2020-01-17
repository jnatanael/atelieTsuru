<?php
/*
 * Redes Sociais
 */
?>

<ul id="social">
	<?php if ( !empty( $options['use-facebook-icon'] ) && $options['use-facebook-icon'] == 1 ) { ?>
		<li><a target="_blank" href="<?php echo $options['facebook-url']; ?>"><i class="icon-facebook"></i> </a></li>
	<?php } ?>

	<?php if ( !empty( $options['use-twitter-icon'] ) && $options['use-twitter-icon'] == 1 ) { ?>
		<li><a target="_blank" href="<?php echo $options['twitter-url']; ?>"><i class="icon-twitter"></i> </a></li>
	<?php } ?>

	<?php if ( !empty( $options['use-google-plus-icon'] ) && $options['use-google-plus-icon'] == 1 ) { ?>
		<li><a target="_blank" href="<?php echo $options['google-plus-url']; ?>"><i class="icon-google-plus"></i> </a></li>
	<?php } ?>

	<?php if ( !empty( $options['use-vimeo-icon'] ) && $options['use-vimeo-icon'] == 1 ) { ?>
		<li><a target="_blank" href="<?php echo $options['vimeo-url']; ?>"> <i class="icon-vimeo"></i> </a></li>
	<?php } ?>

	<?php if ( !empty( $options['use-pinterest-icon'] ) && $options['use-pinterest-icon'] == 1 ) { ?>
		<li><a target="_blank" href="<?php echo $options['pinterest-url']; ?>"><i class="icon-pinterest"></i> </a></li>
	<?php } ?>

	<?php if ( !empty( $options['use-youtube-icon'] ) && $options['use-youtube-icon'] == 1 ) { ?>
		<li><a target="_blank" href="<?php echo $options['youtube-url']; ?>"><i class="icon-youtube-play"></i> </a></li>
	<?php } ?>

	<?php if ( !empty( $options['use-tumblr-icon'] ) && $options['use-tumblr-icon'] == 1 ) { ?>
		<li><a target="_blank" href="<?php echo $options['tumblr-url']; ?>"><i class="icon-tumblr"></i> </a></li>
	<?php } ?>

	<?php if ( !empty( $options['use-linkedin-icon'] ) && $options['use-linkedin-icon'] == 1 ) { ?>
		<li><a target="_blank" href="<?php echo $options['linkedin-url']; ?>"><i class="icon-linkedin"></i> </a></li>
	<?php } ?>

	<?php if ( !empty( $options['use-rss-icon'] ) && $options['use-rss-icon'] == 1 ) { ?>
		<li><a target="_blank" href="<?php echo (!empty( $options['rss-url'] )) ? $options['rss-url'] : get_bloginfo( 'rss_url' ); ?>"><i class="icon-rss"></i> </a></li>
	<?php } ?>

	<?php if ( !empty( $options['use-behance-icon'] ) && $options['use-behance-icon'] == 1 ) { ?>
		<li><a target="_blank" href="<?php echo $options['behance-url']; ?>"> <i class="icon-be"></i> </a></li>
	<?php } ?>

	<?php if ( !empty( $options['use-flickr-icon'] ) && $options['use-flickr-icon'] == 1 ) { ?>
		<li><a target="_blank" href="<?php echo $options['flickr-url']; ?>"><i class="icon-flickr"></i></a></li>
	<?php } ?>

	<?php if ( !empty( $options['use-spotify-icon'] ) && $options['use-spotify-icon'] == 1 ) { ?>
		<li><a target="_blank" href="<?php echo $options['spotify-url']; ?>"><i class="icon-salient-spotify"></i></a></li>
	<?php } ?>

	<?php if ( !empty( $options['use-instagram-icon'] ) && $options['use-instagram-icon'] == 1 ) { ?>
		<li><a target="_blank" href="<?php echo $options['instagram-url']; ?>"><i class="icon-instagram"></i></a></li>
	<?php } ?>

	<?php if ( !empty( $options['use-github-icon'] ) && $options['use-github-icon'] == 1 ) { ?>
		<li><a target="_blank" href="<?php echo $options['github-url']; ?>"><i class="icon-github-alt"></i></a></li>
	<?php } ?>

	<?php if ( !empty( $options['use-soundcloud-icon'] ) && $options['use-soundcloud-icon'] == 1 ) { ?>
		<li><a target="_blank" href="<?php echo $options['soundcloud-url']; ?>"><i class="icon-soundcloud"></i></a></li>
	<?php } ?>

	<?php if ( !empty( $options['use-vk-icon'] ) && $options['use-vk-icon'] == 1 ) { ?>
		<li><a target="_blank" href="<?php echo $options['vk-url']; ?>"><i class="icon-vk"></i></a></li>
			<?php } ?>

</ul>