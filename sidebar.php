<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sanna_Shop
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

if ( is_post_type_archive() || is_product_category() || is_product_tag() ) {
	if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
		<aside class="widget-filter" data-widget-filter>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside>
	<?php }
}
