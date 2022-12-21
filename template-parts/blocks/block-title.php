<section class="block-title" data-scroll-section>
  <div class="title <?php if (!get_field('title_active_animate')) : echo 'center'; endif;?>">
    <?php if( have_rows('title_repeater_title') ): ?>
      <ul class="items" <?php if (get_field('title_active_animate')) : echo 'data-scroll data-scroll-direction="horizontal" data-scroll-speed="10" data-scroll-delay="0.09"'; endif; ?> >
        <?php while( have_rows('title_repeater_title') ): the_row(); ?>
          <li>
            <?php the_sub_field('text'); ?>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
  </div>
</section>