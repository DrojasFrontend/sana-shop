<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sanna_Shop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div <?php if (!is_product()) : echo 'data-scroll-container'; endif; ?> >
	<button type="button" class="close-mini-cart" data-close-minicart></button>

	<?php get_template_part( 'template-parts/nav/announcement' ); ?>
	<header id="header" class="header<?php if (!is_front_page()) : echo ' header-transparent'; endif; ?>" <?php if (is_product()) : echo 'data-header'; endif; ?>>
		<div class="header__wrapper">
			<?php get_template_part( 'template-parts/nav/logo' ); ?>
			<?php get_template_part( 'template-parts/nav/main-menu' ); ?>
			<?php get_template_part( 'template-parts/nav/menu-right' ); ?>
			<?php get_template_part( 'template-parts/nav/search-mobile' ); ?>
		</div>
	</header>
