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
    <a class="menu-item-link" href="#">
      Idiomas
    </a>
    <?php $array = trp_custom_language_switcher();  ?>
    <ul class="" data-no-translation>
      <?php foreach ($array as $name => $item){ ?>
        <li class="">
          <a class="" href="<?php echo $item['current_page_url']?>" style="background-image: url(<?php echo $item['flag_link'] ?>)"> 
            <span>
              <?php if( $item['language_code'] == 'es_CO') : ?>
                ESPAÑOL
              <?php else : ?>
                ENGLISH
              <?php endif; ?>
            </span>
          </a>
        </li>
      <?php } ?>
    </ul>
    <?php get_template_part('images/icons/chevron-down'); ?>
  </div>
</div>