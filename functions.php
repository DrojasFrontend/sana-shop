<?php

/**
 * Get all necessary theme files
 */
$theme_dir = get_template_directory();
require $theme_dir . '/admin/acf-option.php';
require $theme_dir . '/admin/js-css.php';
require $theme_dir . '/admin/menus.php';
require $theme_dir . '/admin/side-bar.php';
require $theme_dir . '/admin/widgets.php';
require $theme_dir . '/admin/woocommerce.php';

function sanna_shop_setup() {

	load_theme_textdomain( 'sanna-shop', get_template_directory() . '/languages' );

	add_theme_support( 'post-thumbnails' );
}

add_theme_support( 'custom-logo', array(
	'height'      => 250,
	'width'       => 250,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
));

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}