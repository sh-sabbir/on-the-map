<?php

//Theme Supports
add_theme_support( 'title-tag' );
add_theme_support( 'html5' );
add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'custom-logo', [
	'height' => 26,
	'width'  => 135,
] );

// Theme load scripts & Styles
function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'slider', get_template_directory_uri() . '/assets/app.css', [], '1.0', 'all' );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/app.js', ['jquery'], 1.0, true );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



// Add custom class to body for front-page.php
add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'front-page';
    }
    return $classes;
}