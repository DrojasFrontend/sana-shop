<div class="header-menu-right">
  <div class="header-menu-right__search">
    <form action="/" method="get">
      <input placeholder="Buscar" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
      <button type="button">
        <input type="image" alt="Search" />
        <?php get_template_part('images/icons/search'); ?>
      </button>
    </form>
  </div>
  <div class="header-menu-right__account">
    <a href="/mi-cuenta">
      <?php if ( is_user_logged_in() ) { ?>
        <?php get_template_part('images/icons/user-follow-fill'); ?>
      <?php } else { ?>
        <?php get_template_part('images/icons/user-line'); ?>
      <?php } ?>
    </a>
  </div>
  <div class="header-menu-right__wishlist">
    <a href="/lista-de-deseos">
      <?php get_template_part('images/icons/heart'); ?>
    </a>
  </div>
  <div class="header-menu-right__cart" data-open-minicart>
    <?php get_template_part('images/icons/add-to-bag'); ?>
    <?php echo do_shortcode( '[woo-minicart]' ); ?>
  </div>
  <div class="header-menu-right__language">
    <?php echo do_shortcode( '[language-switcher]' ); ?>
    <?php get_template_part('images/icons/chevron-down'); ?>
  </div>
</div>