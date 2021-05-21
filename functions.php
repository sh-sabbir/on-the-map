<?php

//Include Nav Walker
require 'includes/class-bootstrap-nav-walker.php';

add_action( 'after_setup_theme', 'on_the_map_theme_setup', 0 );
add_action( 'wp_enqueue_scripts', 'on_the_map_theme_scripts' );
add_filter( 'body_class', 'on_the_map_custom_class' );

// Configure theme settings.
function on_the_map_theme_setup() {

	// Theme Supports.
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5' );
	add_theme_support( 'menus' );
	add_theme_support( 'widgets' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-logo', [
		'height' => 26,
		'width'  => 135,
	] );

	// Nav menu location.
	register_nav_menus( [
		'main-menu' => __( 'Primary Menu', 'on-the-map' ),
	] );
}

// Theme load scripts & Styles.
function on_the_map_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/app.css', [], '1.0', 'all' );
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/app.js', ['jquery'], 1.0, true );
}

// Add custom class to body for front-page.php
/**
 * @param $classes
 * @return mixed
 */
function on_the_map_custom_class( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'front-page';
	}
	return $classes;
}