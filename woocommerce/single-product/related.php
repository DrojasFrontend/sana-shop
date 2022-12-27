<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related products pb-100">
		<h2 class="custom-product__heading h4 py-8 mb-40"><?php the_field('related_product_text', 'option'); ?></h2>
		
		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $related_products as $key => $related_product ) : ?>
					<?php if ( $key <= 2 ) : ?>
						<?php $post_object = get_post( $related_product->get_id() );
						setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
						wc_get_template_part( 'content', 'product' );?>
					<?php endif; ?>

			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

	</section>
	<?php
endif;

wp_reset_postdata();