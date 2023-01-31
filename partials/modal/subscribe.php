<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sanna_Shop
 */

?>

<div class="modal" style="display: none" data-popup-subscribe>
	<div class="modal__body">
    <button type="button" class="modal__close" data-close-popup-subscribe>
      <span class="white"><?php get_template_part('images/icons/close-white'); ?></span>
      <span class="black"><?php get_template_part('images/icons/close-black'); ?></span>
    </button>
		<div class="modal__wrapper">
			<div class="modal__copy">
				<h2><?php echo the_field('popup_title', 'options'); ?></h2>
				<?php echo the_field('popup_copy', 'options'); ?>
				<?php echo the_field('popup_embed', 'options', false, false); ?>
			</div>
			<img src="<?php echo the_field('popup_image', 'options'); ?>" alt="">
		</div>
	</div>
</div>