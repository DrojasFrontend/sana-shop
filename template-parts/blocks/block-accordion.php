<div class="block-accordion" data-scroll-section>
  <?php if( have_rows('repeater_accordion') ): ?>
    <?php while( have_rows('repeater_accordion') ): the_row(); ?>
      <div class="accordion">
        <div class="accordion__item">
          <a href="#" class="accordion__title" data-accordion-title>
            <div class="accordion__spoiler" data-accordion-rotate>
              <span class="accordion__symbol">
              <?php get_template_part('images/icons/plus'); ?>
              </span>
            </div> 
            <span class="accordion__text">
              <?php the_sub_field('accor_title'); ?>
            </span>
          </a>
          <div class="accordion__content" data-accordion-content>
            <?php the_sub_field('accor_copy'); ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>