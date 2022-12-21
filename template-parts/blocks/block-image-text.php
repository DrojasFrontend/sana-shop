<section class="block-image-text" data-scroll-section>
  <div class="image-text">
    <div class="image-text__wrapper">
      <figure class="image-text__img" data-scroll data-scroll-speed=".5">
        <img src="<?php the_field('image_text_image'); ?>" alt="">
      </figure>
      <div class="image-text__copy" data-scroll data-scroll-speed="-.5">
        <?php the_field('image_text_copy'); ?>
      </div>
    </div>
  </div>
</section>