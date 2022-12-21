<div id="header-announcement" class="header-announcement" data-scroll-section>
  <?php if( have_rows('repeat_announcement', 'options') ): ?>
    <ul class="header-announcement__items">
      <?php while( have_rows('repeat_announcement', 'options') ): the_row(); ?>
        <li class="header-announcement__item">
          <div class="header-announcement__content">
            <?php the_sub_field('header_text_announcement', 'option'); ?>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>
</div>
