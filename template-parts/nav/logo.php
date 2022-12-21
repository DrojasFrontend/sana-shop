<div class="header-logo">
  <?php if ( has_custom_logo() && is_front_page() ) { ?>
    <?php the_custom_logo();?>
  <?php } elseif (!is_front_page() ) { ?>
    <a href="/">
      <img src="<?php the_field('logo_secondary', 'option'); ?>" alt="">
    </a>
  <?php } else { ?>
    <h1 class="site-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
  <?php } ?>
</div>