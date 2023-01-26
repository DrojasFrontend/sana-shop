<section class="block-two-images" data-scroll-section>
  <div>
    <?php if( have_rows('repeater_two_images') ): ?>
      <ul class="two-images__wrapper">
        <?php while( have_rows('repeater_two_images') ): the_row(); ?>
          <li data-scroll <?php if (get_sub_field('available_soon') == true ) { echo 'class="available-soon"'; } else { echo 'class="is-available"'; } ?>>
            <figure data-scroll data-scroll-speed="-1.5">
              <a href="<?php the_sub_field('cta_link') ?>">
                <img src="<?php the_sub_field('image'); ?>" alt="">
              </a>
            </figure>
            <?php if (get_sub_field('available_soon') == true ) {?> 
              <div class="two-images__copy" style="color: <?php the_sub_field('color_text'); ?>">
                <?php the_sub_field('heading'); ?>
                <span style="border: 1px solid <?php the_sub_field('color_text'); ?>">
                  DISPONIBLE PRONTO
                </span>
              </div>
            <?php } else { ?>
              <div class="two-images__copy" style="color: <?php the_sub_field('color_text'); ?>">
                <?php the_sub_field('heading'); ?>
                <a href="<?php the_sub_field('cta_link') ?>">
                  <?php the_sub_field('cta_text') ?>
                </a>
              </div>
            <?php } ?>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
  </div>
</section>