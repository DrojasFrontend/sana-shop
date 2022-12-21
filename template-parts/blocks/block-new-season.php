<section class="block-grallery" data-scroll-section>
  <?php $images = get_field('gallery');
  if( $images ): ?>
    <ul class="gallery">
      <?php foreach( $images as $image ): ?>
        <li>
          <figure data-scroll data-scroll-speed=".5">
            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          </figure>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</section>