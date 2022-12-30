<section class="block-tabs-collections" data-scroll-section>
  <div class="tabs-collections">
    <div class="tabs">
      <ul class="tabs__navigation">
        <?php $terms = get_field('tab_collection_categories');
        if( $terms ): ?>
          <?php foreach( $terms as $term ): ?>
            <button class="tabs__btn active" type="button">
              <span><?php print_r($term->name); ?></span>
            </button>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>
    <div class="tabs__content">
      <?php $terms = get_field('tab_collection_categories');
      if( $terms ): ?>
        <?php foreach( $terms as $term ): ?>
          <div class="tabs__body">
            <?php $args = array(
              'post_type' => 'product',
              'posts_per_page' => 3,
              'tax_query' => array(
                array(
                  'taxonomy' => 'product_tag',
                  'field' => 'slug',
                  'terms' => $term->name,
                  'operator' => 'IN',
                )
              ));
              $loop = new WP_Query( $args );
              if ( $loop->have_posts() ) {
                woocommerce_product_loop_start();
                while ( $loop->have_posts() ) : $loop->the_post();
                    wc_get_template_part( 'content', 'product' );
                  endwhile;
                  woocommerce_product_loop_end();
              } else { ?>

              <div data-scroll data-scroll-section style="text-align: center;padding: 0 20px">
              <?php echo __( 'No se encontraron productos' ); ?>
              </div>
                
              <?php }
              wp_reset_postdata();
            ?>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>