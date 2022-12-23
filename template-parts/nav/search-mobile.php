<div class="menu-mobile-search">
  <div class="form" data-form-mobile>
    <form action="/" method="get">
      <input placeholder="Buscar" type="text" name="s" id="search-mobile" value="<?php the_search_query(); ?>" />
      <button type="button" class="btn-search">
        <input type="image" alt="Search" />
        <?php get_template_part('images/icons/search'); ?>
      </button>
    </form>
  </div>
  <div class="menu-mobile-search__btn">
    <button type="submit" data-toggle-search>
      <span class="menu-mobile-search__close" style="display: none">
        <?php get_template_part('images/icons/close'); ?>
      </span>
      <span class="menu-mobile-search__search">
        <?php get_template_part('images/icons/search'); ?>
      </span>
    </button>
  </div>
</div>