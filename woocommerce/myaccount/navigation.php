<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>
<div data-scroll-section class="custom-woocommerce-myaccount">
	
<nav class="woocommerce-MyAccount-navigation">
	<!-- <div class="custom-woocommerce-myaccount__user">
	<?php  
		if ( is_user_logged_in() ) {
			$current_user = wp_get_current_user(); ?>
			<span>
				HOLA
			</span>
			<p>
				<?php  echo $current_user->user_firstname . ' ' . $current_user->user_lastname; ?>
			</p>
			<?php } else {
			echo 'HOLA VISITANTE!';
			}
		?>
	</div> -->
	<ul>
		<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
			<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
				<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
