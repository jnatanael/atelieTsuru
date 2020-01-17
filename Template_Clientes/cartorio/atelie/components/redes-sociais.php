<?php
/*
 * Redes Sociais
 */
?>

<ul id="social">
	<?php if (!empty($options['use-facebook-icon']) && $options['use-facebook-icon'] == 1) { ?>
		<li><a title="Facebook da empresa <?php bloginfo( 'name' ); ?>." target="_blank" href="<?php echo $options['facebook-url']; ?>"><i class="material-icons socicon-facebook"></i> </a></li>
	<?php } ?>

	<?php if (!empty($options['use-twitter-icon']) && $options['use-twitter-icon'] == 1) { ?>
		<li><a title="Twitter da empresa <?php bloginfo( 'name' ); ?>." target="_blank" href="<?php echo $options['twitter-url']; ?>"><i class="material-icons socicon-twitter"></i> </a></li>
	<?php } ?>

	<?php if (!empty($options['use-google-plus-icon']) && $options['use-google-plus-icon'] == 1) { ?>
		<li><a title="Google Plus da empresa <?php bloginfo( 'name' ); ?>." target="_blank" href="<?php echo $options['google-plus-url']; ?>"><i class="material-icons socicon-googleplus"></i> </a></li>
	<?php } ?>

	<?php if (!empty($options['use-vimeo-icon']) && $options['use-vimeo-icon'] == 1) { ?>
		<li><a title="Vimeo da empresa <?php bloginfo( 'name' ); ?>." target="_blank" href="<?php echo $options['vimeo-url']; ?>"> <i class="material-icons socicon-vimeo"></i> </a></li>
	<?php } ?>

	<?php if (!empty($options['use-pinterest-icon']) && $options['use-pinterest-icon'] == 1) { ?>
		<li><a title="Pinterest da empresa <?php bloginfo( 'name' ); ?>." target="_blank" href="<?php echo $options['pinterest-url']; ?>"><i class="material-icons socicon-pinterest"></i> </a></li>
	<?php } ?>

	<?php if (!empty($options['use-youtube-icon']) && $options['use-youtube-icon'] == 1) { ?>
		<li><a title="You Tube da empresa <?php bloginfo( 'name' ); ?>." target="_blank" href="<?php echo $options['youtube-url']; ?>"><i class="material-icons socicon-youtube"></i> </a></li>
	<?php } ?>

	<?php if (!empty($options['use-tumblr-icon']) && $options['use-tumblr-icon'] == 1) { ?>
		<li><a title="Tumblr da empresa <?php bloginfo( 'name' ); ?>." target="_blank" href="<?php echo $options['tumblr-url']; ?>"><i class="material-icons socicon-tumblr"></i> </a></li>
	<?php } ?>

	<?php if (!empty($options['use-linkedin-icon']) && $options['use-linkedin-icon'] == 1) { ?>
		<li><a title="Linkedin da empresa <?php bloginfo( 'name' ); ?>." target="_blank" href="<?php echo $options['linkedin-url']; ?>"><i class="material-icons socicon-linkedin"></i> </a></li>
	<?php } ?>

	<?php if (!empty($options['use-rss-icon']) && $options['use-rss-icon'] == 1) { ?>
		<li><a title="RSS da empresa <?php bloginfo( 'name' ); ?>." target="_blank" href="<?php echo (!empty($options['rss-url'])) ? $options['rss-url'] : get_bloginfo('rss_url'); ?>"><i class="material-icons socicon-rss"></i> </a></li>
	<?php } ?>

	<?php if (!empty($options['use-behance-icon']) && $options['use-behance-icon'] == 1) { ?>
		<li><a title="Behance da empresa <?php bloginfo( 'name' ); ?>." target="_blank" href="<?php echo $options['behance-url']; ?>"> <i class="material-icons socicon-behance"></i> </a></li>
	<?php } ?>

	<?php if (!empty($options['use-flickr-icon']) && $options['use-flickr-icon'] == 1) { ?>
		<li><a title="Flickr da empresa <?php bloginfo( 'name' ); ?>." target="_blank" href="<?php echo $options['flickr-url']; ?>"><i class="material-icons socicon-flickr"></i></a></li>
	<?php } ?>

	<?php if (!empty($options['use-spotify-icon']) && $options['use-spotify-icon'] == 1) { ?>
		<li><a title="Spotify da empresa <?php bloginfo( 'name' ); ?>." target="_blank" href="<?php echo $options['spotify-url']; ?>"><i class="material-icons socicon-spotify"></i></a></li>
	<?php } ?>

	<?php if (!empty($options['use-instagram-icon']) && $options['use-instagram-icon'] == 1) { ?>
		<li><a title="Instagram da empresa <?php bloginfo( 'name' ); ?>." target="_blank" href="<?php echo $options['instagram-url']; ?>"><i class="material-icons socicon-instagram"></i></a></li>
	<?php } ?>

	<?php if (!empty($options['use-github-icon']) && $options['use-github-icon'] == 1) { ?>
		<li><a title="Github da empresa <?php bloginfo( 'name' ); ?>." target="_blank" href="<?php echo $options['github-url']; ?>"><i class="material-icons socicon-github"></i></a></li>
	<?php } ?>

	<?php if (!empty($options['use-soundcloud-icon']) && $options['use-soundcloud-icon'] == 1) { ?>
		<li><a title="Soundcloud da empresa <?php bloginfo( 'name' ); ?>." target="_blank" href="<?php echo $options['soundcloud-url']; ?>"><i class="material-icons socicon-soundcloud"></i></a></li>
	<?php } ?>

	<?php if (!empty($options['use-vk-icon']) && $options['use-vk-icon'] == 1) { ?>
		<li><a title="Vk da empresa <?php bloginfo( 'name' ); ?>." target="_blank" href="<?php echo $options['vk-url']; ?>"><i class="material-icons socicon-vkontakte"></i></a></li>
	<?php } ?>

</ul>