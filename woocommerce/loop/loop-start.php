<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="relative pb-100">
	<?php if( is_post_type_archive() || is_product_category() || is_product_tag()) : ?>
		<button type="button" class="custom-woocommerce-filter" data-open-filter-collection>
			FILTRAR POR
			<span></span>
		</button>
		<!-- Filters -->
		<?php get_sidebar(); ?>
	<?php endif; ?>

	<div class="custom-woocommerce<?php if ( !is_front_page() ) : echo ' custom-woocommerce-container'; endif; ?>" data-woocommerce-container>
		<ul class="products custom-grid-products <?php if( is_single() || is_front_page() ) : echo 'custom-grid-column'; endif; ?>">
