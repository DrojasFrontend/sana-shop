<?php
// Support Woocommerce
function sanna_shop_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'sanna_shop_add_woocommerce_support' );

// Disable Product Image Zoom
function remove_image_zoom_support() {
	remove_theme_support( 'wc-product-gallery-zoom' );
}

// Change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_add_to_cart_button_text_single' ); 
function woocommerce_add_to_cart_button_text_single() {
  return __( 'AÑADIR A LA CESTA', 'woocommerce' ); 
}
add_action( 'wp', 'remove_image_zoom_support', 100 );

function woocommerce_template_product_description() {
	wc_get_template( 'single-product/custom-detail-product.php' );
}
add_action( 'woocommerce_after_add_to_cart_form', 'woocommerce_template_product_description', 0 );

function woocommerce_template_product_combinate() {
	wc_get_template( 'single-product/custom-perfect-combine.php' );
}
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_product_combinate', 0 );

/**
 * @snippet       Edit SELECT OPTIONS Button - WordPress Shop
 * @compatible    WooCommerce 5
 */
 
add_filter( 'woocommerce_product_add_to_cart_text', 'bbloomer_change_select_options_button_text', 9999, 2 );
 
function bbloomer_change_select_options_button_text( $label, $product ) {
	if ( $product->is_type( 'variable' ) ) {
		return 'Seleccionar';
	}
  return $label;
}

// Button minus and plus add to cart
add_action( 'wp_footer' , 'custom_quantity_fields_script' );
function custom_quantity_fields_script(){
    ?>
    <script type='text/javascript'>
    jQuery( function( $ ) {
        if ( ! String.prototype.getDecimals ) {
            String.prototype.getDecimals = function() {
                var num = this,
                    match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                if ( ! match ) {
                    return 0;
                }
                return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
            }
        }
        // Quantity "plus" and "minus" buttons
        $( document.body ).on( 'click', '.plus, .minus', function() {
            var $qty        = $( this ).closest( '.quantity' ).find( '.qty'),
                currentVal  = parseFloat( $qty.val() ),
                max         = parseFloat( $qty.attr( 'max' ) ),
                min         = parseFloat( $qty.attr( 'min' ) ),
                step        = $qty.attr( 'step' );

            // Format values
            if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
            if ( max === '' || max === 'NaN' ) max = '';
            if ( min === '' || min === 'NaN' ) min = 0;
            if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

            // Change the value
            if ( $( this ).is( '.plus' ) ) {
                if ( max && ( currentVal >= max ) ) {
                    $qty.val( max );
                } else {
                    $qty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            } else {
                if ( min && ( currentVal <= min ) ) {
                    $qty.val( min );
                } else if ( currentVal > 0 ) {
                    $qty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            }

            // Trigger change event
            $qty.trigger( 'change' );
        });
    });
    </script>
    <?php
}

// Custom Tab Account
add_filter( 'woocommerce_account_menu_items', function($items) {
    unset($items['downloads']); // Remove downloads item
    $items['dashboard'] = __('Inicio', 'sanna-shop');
    $items['customer-logout'] = __('Cerrar Session', 'sanna-shop');
    return $items;
}, 99, 1 );

add_filter( 'woocommerce_currencies', 'add_cw_currency' );
function add_cw_currency( $cw_currency ) {
     $cw_currency['CUSTOM PESO COLOMBIANO'] = __( 'CUSTOM PESO COLOMBIANO CURRECY', 'woocommerce' );
     return $cw_currency;
}
add_filter('woocommerce_currency_symbol', 'add_cw_currency_symbol', 10, 2);
function add_cw_currency_symbol( $custom_currency_symbol, $custom_currency ) {
     switch( $custom_currency ) {
         case 'CUSTOM PESO COLOMBIANO': $custom_currency_symbol = 'COP '; break;
     }
     return $custom_currency_symbol;
}

// Change position price variante to top */

add_action( 'wp_footer', 'dcms_add_script_footer' );

function dcms_add_script_footer() {
    if ( ! is_product() ) return;
    ?>
        <script>
        jQuery(function ($) {

            $('.variations_form').on('woocommerce_variation_has_changed', function () {
                const container_price_top = 'p.price';
                const container_price_bottom = '.woocommerce-variation-price';

                $(container_price_top).empty();

                setTimeout(function(){
                    if ( $(container_price_bottom).is(":visible") ){
                        const content = $(container_price_bottom).html();
                        $(container_price_top).html(content);
                        $(container_price_bottom).hide();
                    }
                }, 500);
            });

        });
        </script>
    <?php
}