
<?php
/**
 * Single Product Image
 *
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

global $product;

$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );
$attachment_ids = $product->get_gallery_attachment_ids(); 
?>

<div class="custom-product-image">
	<div class="custom-product-image__featured">
		<figure>
			<img src="<?php  echo $featured_image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
		</figure>
	</div>
	<div class="custom-product-image__gallery">
		<?php foreach( $attachment_ids as $i => $attachment_id ) { ?>
			<?php if($i == 0) { ?>
				<figure class="<?php if($i == 0) echo 'custom-product-image__fixed'; ?>">
					<img src="<?php echo $image_link = wp_get_attachment_url( $attachment_id ); ?>" alt="" data-id="<?php $attachment_id ?>">
				</figure>
			<?php } ?>
		<?php } ?>
		<div class="swiper swiper-full-image">
			<div class="swiper-wrapper">
				<?php foreach( $attachment_ids as $i => $attachment_id ) { ?>
					<figure class="swiper-slide <?php if($i == 0) echo 'custom-product-image__none'; ?>">
						<img src="<?php echo $image_link = wp_get_attachment_url( $attachment_id ); ?>" alt="" data-id="<?php $attachment_id ?>">
					</figure>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="custom-product-image__thumbnails">
		<div class="custom-product-image__thumbnails-overflow">
			<div class="swiper swiper-thumbnails">
				<div class="swiper-wrapper">
					<?php foreach( $attachment_ids as $i => $attachment_id ) { ?>
						<div class="swiper-slide">
							<figure>
								<img src="<?php echo $image_link = wp_get_attachment_url( $attachment_id ); ?>" alt="" data-id="<?php $attachment_id ?>">
							</figure>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>



