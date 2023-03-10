<?php
/**
 * Content wrappers
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/wrapper-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} ?>

	<?php if (is_product()) { ?>
		<main id="main" class="custom-product-single__container" role="main">
	<?php } else if (is_product_category()) { ?>
		<main id="main" role="main" data-scroll-section>
	<?php } else { ?>
		<main id="main" class="padding-top" role="main" data-scroll-section>
	<?php } ?>
