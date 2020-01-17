<?php

/**
 * Theme Atelie Tsuru functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 *
 */
/**
 * -----------------------------------------------------------
 * Default theme constants
 * -----------------------------------------------------------
 */
define( 'ATELIE_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/atelie/' );
define( 'ATELIE_THEME_NAME', 'atelietsuru' );

/**
 * -----------------------------------------------------------
 * Atelie Tsuru only works in WordPress 4.7 or later.
 * -----------------------------------------------------------
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/atelie/components/back-compat.php';
	return;
}

/**
 * -----------------------------------------------------------
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 * -----------------------------------------------------------
 */
function atelie_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top' => __( 'Menu Principal', ATELIE_THEME_NAME ),
		'bottom' => __( 'Menu Rodapé', ATELIE_THEME_NAME )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width' => 100,
		'height' => 64,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	/**
	 * Filters Atelie Tsuru array of starter content.
	 *
	 * @since Atelie Tsuru 1.0
	 * @param array $starter_content Array of starter content.
	 */
	$starter_content = apply_filters( 'atelie_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );
}

add_action( 'after_setup_theme', 'atelie_setup' );

/**
 * -----------------------------------------------------------
 * Carregamento de Styles
 * -----------------------------------------------------------
 */
function atelie_register_styles() {
	if ( !is_admin() ) {
		wp_register_style( 'main', get_template_directory_uri() . '/assets/css/main.css', '', '2.0' );
		wp_register_style( 'animate', get_template_directory_uri() . '/assets/css/lib/animate.css', '', '1.2' );
		wp_register_style( 'mobiriseIcons', get_template_directory_uri() . '/assets/css/lib/mobirise.css', '', '1.0' );
		wp_register_style( 'socicon', get_template_directory_uri() . '/assets/css/lib/socicon.css', '', '1.0' );

		wp_enqueue_style( 'main' );
		wp_enqueue_style( 'animate' );
		wp_enqueue_style( 'mobiriseIcons' );
		wp_enqueue_style( 'socicon' );

		// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
		if ( is_customize_preview() ) {
			wp_enqueue_style( 'atelie-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'atelie-style' ), '1.0' );
			wp_style_add_data( 'atelie-ie9', 'conditional', 'IE 9' );
		}

		// Load the Internet Explorer 8 specific stylesheet.
		wp_enqueue_style( 'atelie-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'atelie-style' ), '1.0' );
		wp_style_add_data( 'atelie-ie8', 'conditional', 'lt IE 9' );


		// Theme stylesheet.
		wp_enqueue_style( 'atelie', get_stylesheet_uri() );
	}
}

add_action( 'wp_enqueue_scripts', 'atelie_register_styles' );

/**
 * -----------------------------------------------------------
 * Carregamento de Scripts
 * -----------------------------------------------------------
 */
function atelie_register_js() {
	if ( !is_admin() ) {
		wp_register_script( 'jqueryPlugin', get_template_directory_uri() . '/assets/js/plugins/jquery.min.js', '3.3.1', TRUE );
		wp_register_script( 'materializePlugin', get_template_directory_uri() . '/assets/js/plugins/materialize.min.js', '1.0.0', TRUE );
		wp_register_script( 'wow', get_template_directory_uri() . '/assets/js/plugins/wow.min.js', '1.0.0', TRUE );
		wp_register_script( 'initPlugin', get_template_directory_uri() . '/assets/js/plugins/init.js', '1.0.0', TRUE );
		wp_register_script( 'mainJs', get_template_directory_uri() . '/assets/js/main.js', '1.0.0', TRUE );

		wp_enqueue_script( 'jqueryPlugin' );
		wp_enqueue_script( 'materializePlugin' );
		wp_enqueue_script( 'wow' );
		wp_enqueue_script( 'initPlugin' );
		wp_enqueue_script( 'mainJs' );

		// Load the html5 shiv.
		wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/plugins/html5.js' ), array(), '3.7.3' );
		wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'atelie_register_js' );


/**
 * -----------------------------------------------------------
 * Widget areas
 * -----------------------------------------------------------
 */
if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'description' => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', ATELIE_THEME_NAME ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>' )
);
}

/**
 * -----------------------------------------------------------
 * Alteração do Rodapé do Admin
 * -----------------------------------------------------------
 */
function atelie_remove_footer_admin() {
	echo 'Criado com <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Implementado por <a href="https://www.ateliesolutions.com.br" target="_blank" title="Desenvolvido por Ateliê Solutions - Creative and Authentic">Ateliê Solutions - Creative and Authentic</a></p>';
}

add_filter( 'admin_footer_text', 'atelie_remove_footer_admin' );

/**
 * -----------------------------------------------------------
 * Copyright
 * -----------------------------------------------------------
 */
function atelie_copyright() {

	$ano = date( 'Y' );

	echo "&copy; " . $ano;
}

/**
 * -----------------------------------------------------------
 * Removendo itens desncessários
 * -----------------------------------------------------------
 */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );

/**
 * -----------------------------------------------------------
 * Current Page Url
 * -----------------------------------------------------------
 */
if ( !function_exists( 'current_page_url' ) ) {

	function current_page_url() {
		$pageURL = 'http';
		if ( isset( $_SERVER["HTTPS"] ) ) {
			if ( $_SERVER["HTTPS"] == "on" ) {
				$pageURL .= "s";
			}
		}
		$pageURL .= "://";
		if ( $_SERVER["SERVER_PORT"] != "80" ) {
			$pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
		}
		return $pageURL;
	}

}

/**
 * -----------------------------------------------------------
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Atelie Tsuru 1.0.0
 * @return string 'Continue reading' link prepended with an ellipsis.
 * -----------------------------------------------------------
 */
function atelie_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>', esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */ sprintf( __( 'Leia Mais <span class="screen-reader-text"> "%s"</span>', ATELIE_THEME_NAME ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}

add_filter( 'excerpt_more', 'atelie_excerpt_more' );

/**
 * -----------------------------------------------------------
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Atelie Tsuru 1.0.0
 * -----------------------------------------------------------
 */
function atelie_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}

add_action( 'wp_head', 'atelie_javascript_detection', 0 );

/**
 * -----------------------------------------------------------
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 * -----------------------------------------------------------
 */
function atelie_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}

add_action( 'wp_head', 'atelie_pingback_header' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Atelie Tsuro 1.0
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function atelie_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	$args['format'] = 'list';

	return $args;
}

add_filter( 'widget_tag_cloud_args', 'atelie_widget_tag_cloud_args' );

/**
 * -----------------------------------------------------------
 * Paginação
 * -----------------------------------------------------------
 */
function atelie_pagination_funtion() {
// Get total number of pages
	global $wp_query;
	$total = $wp_query->max_num_pages;

// Only paginate if we have more than one page
	if ( $total > 1 ) {
// Get the current page
		if ( !$current_page = get_query_var( 'paged' ) ) {
			$current_page = 1;
			$big = 999999999;
// Structure of "format" depends on whether we’re using pretty permalinks
			$permalink_structure = get_option( 'permalink_structure' );
			$format = empty( $permalink_structure ) ? '&page=%#%' : 'page/%#%/';
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
				'format' => $format,
				'current' => $current_page,
				'total' => $total,
				'mid_size' => 2,
				'type' => 'list'
			) );
		}
	}
	/** END Pagination */
}

/**
 * -----------------------------------------------------------
 *  Personalização Login
 * -----------------------------------------------------------
 */
function custom_login_css() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_directory_uri() . '/atelie/css/login.min.css"/>';
	echo '<script type="text/javascript" src="' . get_stylesheet_directory_uri() . '/assets/js/plugins/jquery.min.js"></script>';
	echo '<script type="text/javascript" src="' . get_stylesheet_directory_uri() . '/atelie/js/login.min.js"></script>';
}

add_action( 'login_head', 'custom_login_css' );

add_action( 'login_head', 'untame_fadein', 30 );

function untame_fadein() {

	echo '
	<script type="text/javascript">
		// <![CDATA[
	jQuery(document).ready(function\() {
		jQuery("#loginform,#nav,#backtoblog").css("display", "none");
		jQuery("#loginform,#nav,#backtoblog").fadeIn(3500);
		});
		// ]]>
		</script>';
	}

/**
 * -----------------------------------------------------------
 * Qualidade da imagem em 100%
 * -----------------------------------------------------------
 */
function high_jpg_quality() {
	return 100;
}

add_filter( 'jpg_quality', 'high_jpg_quality' );

/**
 * -----------------------------------------------------------
 * Shortercode Grid Materialize
 * Utilização [row class="row"][/row]
 * -----------------------------------------------------------
 */
function atelieGridRow( $params, $content = null ) {
	// Defaut
	extract( shortcode_atts( array( 'class' => '' ), $params ) );

	return '<div class="' . $class . ' valign-wrapper">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'row', 'atelieGridRow' );

/**
 * -----------------------------------------------------------
 * Shortercode Grid Materialize
 * Utilização [colum class="s6"][/colum]
 * -----------------------------------------------------------
 */
function atelieGridCol( $paramsC, $contentC = null ) {
	// Defaut
	extract( shortcode_atts( array( 'class' => '' ), $paramsC ) );

	return '<div class="col ' . $class . '">' . do_shortcode( $contentC ) . '</div>';
}

add_shortcode( 'colum', 'atelieGridCol' );


function change_logo_class( $html ) {

	$html = str_replace( 'custom-logo-link', 'brand-logo', $html );
	$html = str_replace( 'custom-logo', 'responsive-img', $html );

	return $html;
}
add_filter( 'get_custom_logo', 'change_logo_class' );

function atelie_excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . ' [...]';
	} else {
		$excerpt = implode(" ", $excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
	return '<p>' . $excerpt . '</p>';
}

/**
 * -----------------------------------------------------------
 * Load Nav Materialize
 * -----------------------------------------------------------
 */
require get_template_directory() . '/atelie/components/wp_materialize_navwalker.php';

/**
 * ----------------------------------------------------------
 * Admin Redux Framework
 * -----------------------------------------------------------
 */
require get_parent_theme_file_path( '/atelie/admin.php' );

/**
 * -----------------------------------------------------------
 * Load Jetpack compatibility file
 * -----------------------------------------------------------
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/atelie/components/jetpack.php';
}

/**
 * -----------------------------------------------------------
 * Custom template tags for this theme
 * -----------------------------------------------------------
 */
require get_parent_theme_file_path( '/atelie/components/template-tags.php' );

/**
 * -----------------------------------------------------------
 * Additional features to allow styling of the templates
 * -----------------------------------------------------------
 */
require get_parent_theme_file_path( '/atelie/components/template-functions.php' );

/**
 * -----------------------------------------------------------
 * Customizer additions
 * -----------------------------------------------------------
 */
require get_parent_theme_file_path( '/atelie/components/customizer.php' );

/**
 * -----------------------------------------------------------
 * Meta Configurações
 * -----------------------------------------------------------
 */
require get_parent_theme_file_path('/atelie/components/meta-config.php');

/**
 * -----------------------------------------------------------
 * Meta Configurações Páginas
 * ------------------------------------------------------------
 */
require get_parent_theme_file_path('/atelie/components/page-meta.php');

/**
 * -----------------------------------------------------------
 * Produtos e Serviços
 * ------------------------------------------------------------
 */
require get_parent_theme_file_path('/atelie/components/produtos.php');

// Definição de variavel global para todas as páginas
$options = get_atelie_theme_options();
