<?php
/**
 * Custom functions
 */

//Menus
function register_my_menus() {
	register_nav_menus(
	array(
	'menu-1' => __( 'Menu 1' ),
	'menu-2' => __( 'Menu 2' )
	)
	);
}

//Add custom header support
global $wp_version;
if ( version_compare( $wp_version, '3.4', '>=' ) ) {
		$defaults = array(
	'default-image'          => '',
	'random-default'         => false,
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => true,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
		add_theme_support( 'custom-header', $defaults );
}

	
else
	add_custom_image_header( $wp_head_callback, $admin_head_callback, $admin_preview_callback );