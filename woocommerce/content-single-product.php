<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'custom-product-single-container', $product ); ?>>
	<div class="custom-product-single-container__actions">
		<a onclick="window.history.go(-1); return false;" href="#">
			<?php get_template_part('images/icons/arrow-prev'); ?>
		</a>
		<a href="/carrito/" class="" data-open-minicart>
			<?php get_template_part('images/icons/add-to-bag'); ?>
			<?php 
				$count = WC()->cart->get_cart_contents_count()
			?>
			<?php if($count > 0): ?>
				<span>
					<?php echo $count; ?>
				</span>
			<?php endif; ?>

		</a>
	</div>
	<section class="custom-product__wrapper">
		<?php
			global $product;
			$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( isset($product_id )), 'single-post-thumbnail' );
		?>
		<div class="custom-product-image__featured">
			<figure>
				<img src="<?php  echo $featured_image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
			</figure>
		</div>
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>

		<div class="custom-product__summary entry-summary">
			<div class="back">
        <a class="link" onclick="window.history.go(-1); return false;" href="#">
          <?php get_template_part('images/icons/arrow-prev-black'); ?>
        </a>
      </div>
			<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
			?>
		</div>
	</section>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>

<?php
$product_id = $product->get_id();
$product_name = $product->get_name();
$product_price = wc_price($product->get_price());
?>
<div class="custom-product-single-fixed-select" data-fixed-select>
	<div class="custom-product-single-fixed-select__name">
		<h3><?php echo $product_name ?></h3>
		<span><?php echo $product_price ?></span>
	</div>
	<button type="submit" class="custom-product-single-fixed-select__add" data-open-select-size>
		Seleccionar Talla
	</button>
	<div class="open-add-to-cart" data-open-add-to-cart>
		<button class="open-add-to-cart__close" type="button" data-close-add-to-cart>
			<?php get_template_part('images/icons/close-black'); ?>
		</button>
		<?php do_action( 'woocommerce_single_product_summary' ); ?>
	</div>
</div>
