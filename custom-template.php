<?php
/**
 * Template Name: Plantilla personalizada
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sanna_Shop
 */

get_header();
?>
	<main id="primary" class="site-main padding-top">
		
		<?php while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'template' );
		endwhile; ?>

	</main>
<?php
get_footer();
