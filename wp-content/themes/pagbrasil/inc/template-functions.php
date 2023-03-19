<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package PagBrasil
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function pagbrasil_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'pagbrasil_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function pagbrasil_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'pagbrasil_pingback_header' );



function custom_nav_class ($classes, $item) {
	
	if (in_array('current-menu-item', $classes) ){
		$classes[] = 'nav-item active ';
	} else {
		$classes[] = 'nav-item ';
	}
	
	return $classes;
}


// custom excerpt length
function custom_excerpt_length( $length ) {
	return 20;
 }
 add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_filter('nav_menu_css_class' , 'custom_nav_class' , 10 , 2);

add_filter( 'show_admin_bar', '__return_false' );
