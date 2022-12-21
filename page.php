<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sanna_Shop
 */

get_header();
?>
	<main id="primary" class="site-main <?php if ( is_page('637') || is_page( '289' ) || is_page( '294' ) || is_page( '302' ) ) : echo 'padding-top'; endif; ?>">
		
		<?php if (! is_front_page() && !is_page(12) && !is_page(13) && !is_page(14)): ?>
			<header data-scroll-section>
				<h1 class="page-title"><?php single_post_title(); ?></h1>
			</header>
		<?php elseif (is_page(12) || is_page(13) || is_page(14)) : ?>
			<header data-scroll-section class="custom-woocommerce-myaccount__header">
				<h1 class="custom-woocommerce-myaccount__title"><?php single_post_title(); ?></h1>
			</header>
			<hr class="line-gray" data-scroll-section>
		<?php endif; ?>
		
		<?php if (get_field('page_short_description')) : ?>
			<div class="page-description" data-scroll-section>
				<?php the_field('page_short_description'); ?>
			</div>
		<?php endif; ?>

		<?php while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile; ?>

	</main>
<?php
get_footer();
