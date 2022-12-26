<div id="menu-mobile-down" class="menu-mobile" data-menu-mobile>
  <div class="menu-mobile-down__btn">
    <a href="/">
      <?php get_template_part('images/icons/home'); ?>
    </a>
  </div>
  <div class="menu-mobile-down__btn">
    <a href="/mi-cuenta">
      <?php if ( is_user_logged_in() ) { ?>
        <?php get_template_part('images/icons/user-follow-fill'); ?>
      <?php } else { ?>
        <?php get_template_part('images/icons/user-line'); ?>
      <?php } ?>
    </a>
  </div>
  <div class="menu-mobile-down__btn">
    <a href="/lista-de-deseos">
      <?php get_template_part('images/icons/heart'); ?>
    </a>
  </div>
  <div class="header-menu-right__cart menu-mobile-down__btn" data-open-minicart>
    <?php get_template_part('images/icons/add-to-bag'); ?>
    <?php echo do_shortcode( '[woo-minicart]' ); ?>
  </div>
</div>