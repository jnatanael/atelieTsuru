<div id="breadcrumbsPost" class="breadcrumb">
	<div class="container">
		<?php
		//breadcrumbs
		if ( function_exists( 'yoast_breadcrumb' ) && !is_home() && !is_front_page() ) {
			yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
		}
		?>
	</div>
</div>