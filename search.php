<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Sanna_Shop
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header data-scroll-section class="page-header page-search padding-top">
				<h1 class="page-title-search">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Resultados de la búsqueda de: %s', 'sanna-shop' ), get_search_query()  );
					?>
				</h1>
			</header>
			<hr class="line-gray" data-scroll-section>
			<div data-scroll-section class="page-search__wrapper">
				<ul>
					<?php
					while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'search' );
					endwhile;
					the_posts_navigation();
					else :
					get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</ul>
			</div>
	</main>

<?php
get_footer();
