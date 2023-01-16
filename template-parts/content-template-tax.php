<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sanna_Shop
 */

?>

<div class="custom-template-tax" data-scroll-section>
  <header class="woocommerce-products-header">
		<h1 class="custom-woocommerce-header__title page-title"><?php the_title(); ?></h1>
	</header>
  <?php the_content(); ?>
</div>
