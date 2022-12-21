<?php
/**
 * Perfect Combine
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

global $product;

$perfect_combine = get_field('perfect_combine');
if ( $perfect_combine ) : ?>

  <section class="custom-product__perfect-combine pb-100">
    <h2 class="custom-product__heading h4 py-8 mb-40"><?php the_field('perfect_combine_text', 'option'); ?></h2>
    <?php woocommerce_product_loop_start();
      foreach ( $perfect_combine as $related_product ) :
        $post_object = get_post( $related_product );
        setup_postdata( $GLOBALS['post'] =& $post_object );
        wc_get_template_part( 'content', 'product' );
      endforeach; 
    woocommerce_product_loop_end(); ?>
  </section>
  
<?php endif; 

wp_reset_postdata();