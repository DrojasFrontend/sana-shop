<?php
/**
 * Detail Product
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.0.0
 */

defined( 'ABSPATH' ) || exit;

global $post;
?>

<div class="custom-accordion" id="custom-accordion"> 
	<ul>
		<?php if ( get_the_content() ) : ?>
			<li>
				<input type="checkbox" checked>
				<i>
					<?php get_template_part('images/icons/plus'); ?>
				</i>
				<h5 class="h5">Detalles del producto</h5>
				<?php the_content(); ?>
			</li>
		<?php endif; ?>

		<!-- <?php if( have_rows('repeater_social_media', 'options') ): ?>
			<li>
				<input type="checkbox" checked>
				<i>
					<?php get_template_part('images/icons/plus'); ?>
				</i>
				<h5 class="h5">Compartir</h5>
				<p>
					<?php while( have_rows('repeater_social_media', 'options') ): the_row(); ?>
						<a href="<?php the_sub_field('link', 'option'); ?>" target="_blank">
							<img src="<?php the_sub_field('icon', 'option'); ?>" alt="">
						</a>
					<?php endwhile; ?>
				</p>
			</li>
		<?php endif; ?> -->
	</ul>
</div>


