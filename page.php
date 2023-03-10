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
	<main id="primary" class="site-main <?php if ( is_page('nuevo') || is_page( 'nosotros' ) || is_page( 'sale' ) || is_page( 'lista-de-deseos' ) || is_page( 'envios' ) || is_page( 'devoluciones' ) ) : echo 'padding-top'; endif; ?>">
		
		<?php if (is_page('envios') || is_page('devoluciones')): ?>
			<header data-scroll-section>
				<h1 class="page-title">
					<?php single_post_title(); ?>
				</h1>
			</header>
		<?php elseif (is_page(12) || is_page(13) || is_page(14)) : ?>
			<header data-scroll-section class="custom-woocommerce-myaccount__header">
				<!-- <h1 class="custom-woocommerce-myaccount__title"><?php single_post_title(); ?></h1> -->
			</header>
			<!-- <hr class="line-gray" data-scroll-section> -->
		<?php endif; ?>
		<div data-scroll-section data-scroll-speed=".2" class="go-back <?php if(is_page('envios') || is_page('devoluciones')): echo 'mt-180'; endif;?>">
			<a onclick="window.history.go(-1); return false;" href="#">
				<?php get_template_part('images/icons/arrow-prev-black'); ?>
			</a>
		</div>
		<?php if (get_field('page_short_description')) : ?>
			<div class="page-description" data-scroll-section>
				<?php the_field('page_short_description'); ?>
			</div>
		<?php endif; ?>

		<?php while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile; ?>

		<!-- Menu Mobile Bottom-->
			<?php get_template_part( 'template-parts/nav/menu-mobile' ); ?>
		<!-- Menu Mobile Bottom -->

	</main>
<?php
get_footer();
