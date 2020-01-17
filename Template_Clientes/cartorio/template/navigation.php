<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */

$options = get_atelie_theme_options();
?>
<div class="navbar-fixed">
	<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Menu Principal', ATELIE_THEME_NAME); ?>">
		<div class="nav-wrapper container">
			<div class="row">
			<div class="col s12 m4 l2">
			<?php
			the_custom_logo();
			?>
			</div>
				<div class="col s12 m8 l8 hide-on-med-and-down">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'top',
						'depth' => 3,
						'container' => false,
						'menu_id' => 'top-menu',
						'menu_class' => 'right',
						'walker' => new Materialize_Walker_Nav_Menu()
					));
					?>
				</div>
				<div class="col s12 m8 l2 right-align">
					<a href="#" data-target="nav-mobile" class="sidenav-trigger">
						<span class="mbri-menu"></span>
					</a>
					<a href="#" data-target='dropdownEntrar' target="_blank" class="btn waves-effect waves-light btn-login dropdown-trigger">
						<span class="mbri-login"></span> Entrar
					</a>
				</div>
			</div>
		</div>
	</nav><!-- #site-navigation -->
</div>

<ul id='dropdownEntrar' class='dropdown-content'>
   <li><a href="#!"><span class="mbri-user"></span> Credor</a></li>
   <li><a href="#!"><span class="mbri-smile-face"></span> Devedor</a></li>
</ul>

<ul id="nav-mobile" class="sidenav">
	<li>
		<div class="logo">
			<?php
			the_custom_logo();
			?>
		</div>
	</li>
	<li class="divider"></li>
	<?php
	wp_nav_menu(array(
		'theme_location' => 'top',
		'depth' => 3,
		'container' => false,
		'menu_id' => 'mobile-menu',
		'menu_class' => ''
	));
	?>

</ul>
