<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0
 */
$unique_id = esc_attr(uniqid('search-form-'));
?>

<div id="searcgPesquisa" class="navForm">
	<div class="nav-wrapper">
		<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
			<div class="input-field">
				<input type="search" id="<?php echo $unique_id; ?>" class="search search-field" placeholder="<?php echo esc_attr_x('Pesquisar...', 'placeholder', ATELIE_THEME_NAME); ?>" value="<?php echo get_search_query(); ?>" name="s" required />
				<label class="label-icon" for="<?php echo $unique_id; ?>">
					<i class="material-icons mbri-search"></i>
				</label>
				<i class="material-icons mbri-close"></i>
			</div>
		</form>
	</div>
</div>
