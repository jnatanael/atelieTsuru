<?php

/**
 * Ateliê Tsuru: Customizer
 *
 * @package WordPress
 * @subpackage Atelie_Tsuru
 * @since 1.0.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function atelie_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'atelie_customize_partial_blogname',
	) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'atelie_customize_partial_blogdescription',
	) );
}

add_action( 'customize_register', 'atelie_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Ateliê Tsuru
 * @see atelie_customize_register()
 *
 * @return void
 */
function atelie_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Ateliê Tsuru
 * @see atelie_customize_register()
 *
 * @return void
 */
function atelie_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function atelie_customize_preview_js() {
	wp_enqueue_script( 'atelie-customize-preview', get_theme_file_uri( '/atelie/js/customize-preview.js' ), array( 'customize-preview' ), '1.0', true );
}

add_action( 'customize_preview_init', 'atelie_customize_preview_js' );
