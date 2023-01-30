<div class="menu-mobile-fixed">
  <button type="button" class="close-black" data-close-menu-fixed>
    <?php get_template_part('images/icons/arrow-left-thin'); ?>
  </button>
  <div class="menu-mobile-fixed__menu">
    <?php
      class MainNavMobileWalker extends Walker_Nav_Menu {
        function display_element($item, &$children_elements, $max_depth, $depth, $args, &$output) {
          if($max_depth == 0){ ?>
            <li class="menu-mobile-fixed__menu-item<?php if ($children_elements[$item->ID]) { ?> has-child <?php } ?>">
              <a class="menu-mobile-fixed__menu-item-link <?php if($item->title == 'Colecciones'): echo 'bold'; endif; ?>" href="<?php echo $item->url; ?>">
                <?php echo $item->title ?>
              </a>
              <?php if ($children_elements[$item->ID]) { ?>
                <button type="button">
                  <?php get_template_part('images/icons/arrow-down-thin'); ?>
                </button>
              <?php } ?>
              <?php if ($children_elements[$item->ID]) { ?>
                <div class="menu-mobile-fixed__sub-menu">
                  <div class="menu-mobile-fixed__sub-menu__wrapper">
                    <ul class="menu-mobile-fixed__sub-menu-pictures" role="tabpanel" aria-labelledby="<?php echo $item->title; ?>" style="display:none;">
                      <?php $key = 0; ?>
                      <?php foreach ($children_elements[$item->ID] as $key => $child) { ?>
                        <?php $thumbnailItem = get_field('thumbnail', $item); ?>
                        <?php $thumbnailChild = get_field('thumbnail', $child); ?>

                        <?php if ($thumbnailItem) : ?>
                          <?php if ($key == 0) : ?>
                            <li class="menu-mobile-fixed__sub-menu-picture">
                              <a href="<?php echo $item->url ?>">
                                <img class="picture-big" src="<?php echo $thumbnailItem ?>" width="" alt="">
                              </a>
                            </li>
                          <?php endif; ?>
                        <?php elseif ($thumbnailChild) : ?>
                          <li class="menu-mobile-fixed__sub-menu-picture">
                            <a href="<?php echo $child->url ?>">
                              <img src="<?php echo $thumbnailChild ?>" width="" alt="">
                              <span>
                                <?php echo $child->title ?>
                              </span>
                            </a>
                          </li>
                        <?php endif; ?>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
              <?php } ?>
            </li>
          <?php }
        }
      }
      ?>

    <nav class="menu-mobile-fixed__nav">
      <ul class="menu">
        <?php
          wp_nav_menu([
            'theme_location' => 'header-menu', 
            'container_class' => '' ,
            'menu_class' => '',
            'walker' => new MainNavMobileWalker()
            ])
        ?>
      </ul>
      <ul class="menu-bottom">
        <li class="menu-mobile-fixed__menu-item">
          <a href="#" class="menu-mobile-fixed__menu-item-link menu-mobile-fixed__menu-item-banner">
            <img src="<?php the_field('banner_menu_mobile', 'option'); ?>" alt="">
            <div class="summary">
              <p class="heading-small"><?php the_field('banner_menu_heading', 'option'); ?> </p>
              <p class="heading-large"><?php the_field('banner_menu_title', 'option'); ?> </p>
            </div>
          </a>
        </li>
        <li class="menu-mobile-fixed__menu-item has-child language"> 
          <a href="" class="menu-mobile-fixed__menu-item-link">
            Idioma
          </a>
          <button type="button">
            <?php get_template_part('images/icons/arrow-down-thin'); ?>
          </button>
          <div class="menu-mobile-fixed__sub-menu">
            <ul class="menu-mobile-fixed__sub-menu-pictures" role="tabpanel" aria-labelledby="<?php echo $item->title; ?>" style="display:none;">
              <?php $array = trp_custom_language_switcher();  ?>
              <!-- IMPORTANT! You need to have data-no-translation on the wrapper with the links or TranslatePress will automatically translate them in a secondary language. -->    
              <div class="language-wrapper" data-no-translation>
                <?php foreach ($array as $name => $item){ ?>
                  <li class="menu-mobile-fixed__menu-item">
                    <a class="menu-mobile-fixed__menu-item-link" href="<?php echo $item['current_page_url']?>"> 
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
              </div>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
  </div>
  
</div>