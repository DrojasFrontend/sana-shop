<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sanna_Shop
 */

?>

<div data-scroll-section data-scroll-speed=".2" class="go-back">
  <a onclick="window.history.go(-1); return false;" href="#">
    <?php get_template_part('images/icons/arrow-prev-black'); ?>
  </a>
</div>
<div class="custom-template" data-scroll-section>
  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>
</div>
