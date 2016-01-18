<?php
/**
 * DBR Parallax functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 *
 * @package WordPress
 * @subpackage DBR_Parallax
 * @since DeepBlue Revenue Parallax 0.8
 */

global $post;

function dbrparallax_enqueue_style() {

	$slug = get_post( $post )->post_name;

	wp_enqueue_style( 'dbr-normalize', trailingslashit( get_template_directory_uri() ) . 'css/normalize.min.css', false ); 
	wp_enqueue_style( 'dbr-foundation', trailingslashit( get_template_directory_uri() ) . 'css/foundation.min.css', false ); 


	wp_enqueue_style( 'dbr-main-aesthetic', trailingslashit( get_template_directory_uri() ) . 'css/main.aesthetic.css', false ); 
	wp_enqueue_style( 'dbr-main-layout', trailingslashit( get_template_directory_uri() ) . 'css/main.layout.css', false ); 


	wp_enqueue_style( 'dbr-home-aesthetic', trailingslashit( get_template_directory_uri() ) . 'css/' . $slug . '.aesthetic.css', false ); 
	wp_enqueue_style( 'dbr-home-layout', trailingslashit( get_template_directory_uri() ) . 'css/' . $slug . '.layout.css', false ); 
}

function dbrparallax_enqueue_script() {
    // Use `get_stylesheet_directroy_uri() if your script is inside your theme or child theme.
	wp_register_script( 'dbr-modernizr', trailingslashit( get_template_directory_uri() ) . 'js/vendor/foundation/vendor/modernizr-2.8.3-respond-1.4.2.min.js' );

    wp_register_script( 'dbr-foundation', trailingslashit( get_template_directory_uri() ) . 'js/vendor/foundation/foundation.min.js', array( 'jquery' ) );

	wp_enqueue_script( 'my-main', trailingslashit( get_template_directory_uri() ) . 'js/main.js', array( 'dbr-modernizr', 'dbr-foundation' ) );

    // Let's enqueue a script only to be used on a specific page of the site
    if ( is_page( 'home' ) ){

        // wp_enqueue_script( 'my-careers-script', get_stylesheet_directory_uri() . '/js/my-careers-script.js', array( 'jquery', 'my-script' ) );
    }
}

add_action( 'wp_enqueue_scripts', 'dbrparallax_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'dbrparallax_enqueue_script' );

function dbrparallax_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	
	$wp_customize->add_setting( 'dbrparallax_item', array(
	    'default'        => 'lightblue',
		'section'        => 'colors',
	    'capability'     => 'edit_theme_options',
		'transport'      => 'postMessage'
	) );

	$wp_customize->add_section( 'dbrparallax_base_font_color' , array(
	    'title'      => __( 'Font Color', 'dbrparallax' ),
	    'priority'   => 30,
		'transport'  => 'postMessage',
	) );
}

add_action( 'customize_register', 'dbrparallax_customize_register');