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

function change_multiple_texts( $translated ) {
	$text       = array(
			'RETURN TO SHOP' => 'Volver a la tienda',
			'No products on your wishlist yet.' => 'No hay productos en su lista de deseos todavía.',

	);
	$translated = str_ireplace( array_keys( $text ), $text, $translated );
	return $translated;
}
add_filter( 'gettext', 'change_multiple_texts', 20 );