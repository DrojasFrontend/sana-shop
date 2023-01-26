<?php

if ( ! defined( '_S_VERSION' ) ) {
	$time = time();
	define( '_S_VERSION', $time );
}

function _add_stylesheets() {
	wp_enqueue_style('sanna-style', get_template_directory_uri() . '/assets/public/css/main.css', array(), _S_VERSION, 'all' );
}
add_action('wp_enqueue_scripts', '_add_stylesheets');

function _add_javascript() {
	wp_enqueue_script('sanna-js', get_template_directory_uri() . '/assets/public/js/main.js', array(), _S_VERSION, true );
	if (is_front_page()) {
		wp_enqueue_script('sanna-swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), _S_VERSION, true );
		wp_enqueue_script('sanna-swiper-function-js', get_template_directory_uri() . '/assets/public/js/swiper.js', array(), _S_VERSION, true );
	}
}
add_action('wp_enqueue_scripts', '_add_javascript', 100);