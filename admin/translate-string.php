<?php

function change_multiple_texts( $translated ) {
	$text       = array(
    'RETURN TO SHOP' => 'Volver a la tienda',
    'No products on your wishlist yet.' => 'No hay productos en su lista de deseos todavía.',

	);
	$translated = str_ireplace( array_keys( $text ), $text, $translated );
	return $translated;
}
add_filter( 'gettext', 'change_multiple_texts', 20 );