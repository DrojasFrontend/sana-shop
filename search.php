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

		<header data-scroll-section class="page-header page-search padding-top">
			<h1 class="page-title-search">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Resultados de la búsqueda de: %s', 'sanna-shop' ), get_search_query()  );
				?>
			</h1>
		</header>
		<?php if ( have_posts() ) : ?>

			<hr class="line-gray" data-scroll-section>
			<div data-scroll-section class="page-search__wrapper">
				<ul>
					<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'search' );
						endwhile;
					?>
				</ul>
				<a class="button--back" onclick="window.history.go(-1); return false;" href="#">Volver</a>
			</div>
		<?php else : ?>
			<div data-scroll-section class="page-header page-search">
				<h3 class="alert-info">
					Lo sentimos, esta categoría o producto no está disponible. Busca de nuevo o <a onclick="window.history.go(-1); return false;" href="#">vuelve</a> atrás
				</h3>
			</div>
		<?php endif; ?>
	</main>

<?php
get_footer();
