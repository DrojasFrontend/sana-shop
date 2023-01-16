<?php
/**
 * Template Name: Plantilla Taxonomia 
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
			get_template_part( 'template-parts/content', 'template-tax' );
		endwhile; ?>

	</main>
<?php
get_footer();
