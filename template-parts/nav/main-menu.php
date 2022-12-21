<?php
  class MainNavWalker extends Walker_Nav_Menu {
    function display_element($item, &$children_elements, $max_depth, $depth, $args, &$output) {
      if($max_depth == 0){ ?>
        <li class="menu-item">
          <a class="" href="<?php echo $item->url; ?>">
            <?php echo $item->title ?>
          </a>
          
          <?php if ($children_elements[$item->ID]) { ?>
            <div class="sub-menu">
              <div class="sub-menu__wrapper">
                <h3 class="<?php if($item->title === 'tienda' || $item->title === 'shop') : ?>h3-big <?php else : ?>h3-small<?php endif; ?>"><?php echo $item->title ?></h3>
                <ul class="" role="tabpanel" aria-labelledby="<?php echo $item->title; ?>">
                  <?php foreach ($children_elements[$item->ID] as $child) { ?>
                    <li class="sub-menu-link">
                      <a class="" href="<?php echo $child->url; ?>"><?php echo $child->title; ?></a>
                    </li>
                  <?php } ?>
                </ul>
                <ul class="sub-menu-pictures" role="tabpanel" aria-labelledby="<?php echo $item->title; ?>">
                  <?php $key = 0; ?>
                  <?php if($item->title === 'Tienda' || $item->title === 'Shop') : ?>
                    <?php foreach ($children_elements[$item->ID] as $key => $child) { ?>
                      <?php 
                      ?>
                        <?php if ($key <= 2) : ?>
                          <?php $thumbnail = get_field('thumbnail', $child); ?>
                          <li class="sub-menu-picture picture-small">
                            <a href="<?php echo $child->url ?>">
                              <img src="<?php echo $thumbnail ?>" width="187px" alt="">
                              <span>
                                <?php echo $child->title ?>
                              </span>
                            </a>
                          </li>  
                        <?php endif ?>
                    <?php } ?>
                  <?php elseif ($item->title === 'Colecciones') :  ?>
                    <?php foreach ($children_elements[$item->ID] as $key => $child) { ?>
                        <?php if ($key <= 1) : ?>
                          <?php $thumbnail = get_field('thumbnail', $child); ?>
                          <li class="sub-menu-picture">
                            <a href="<?php echo $child->url ?>">
                              <img src="<?php echo $thumbnail ?>" width="279" alt="">
                              <span>
                                <?php echo $child->title ?>
                              </span>
                            </a>
                          </li> 
                        <?php endif ?> 
                    <?php } ?>
                  <?php elseif ($item->title === 'Ventas') :  ?>
                    <?php $thumbnail = get_field('thumbnail', $item); ?>
                    <li class="sub-menu-picture">
                      <a href="<?php echo $item->url ?>">
                        <img src="<?php echo $thumbnail ?>" width="550" alt="">
                      </a>
                    </li> 
                  <?php endif ?>
                </ul>
              </div>
            </div>
          <?php } ?>
        </li>
      <?php }
    }
  }
  ?>

<nav class="header-menu">
  <ul class="menu">
	<?php
    wp_nav_menu([
			'theme_location' => 'header-menu', 
      'container_class' => '' ,
			'menu_class' => '',
			'walker' => new MainNavWalker()
			])
  ?>
	</ul>
</nav>