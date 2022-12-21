<?php

function sanna_shop_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Filter Shop', 'sanna-shop' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sanna-shop' ),
			'before_title'    => '<h4>', 'after_title'   => '</h4>',
			'before_widget'   => '<li>',
			'after_widget'    => "</li>\n", 
			'class'           => '',
			'before_sidebar'  => '',
			'after_sidebar'   => '',
			'show_in_rest'    => false,
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Sort By', 'sanna-shop' ),
			'id'            => 'sidebar-6',
			'description'   => esc_html__( 'Add widgets here.', 'sanna-shop' ),
			'before_title'    => '<h4>', 'after_title'   => '</h4>',
			'before_widget'   => '<li>',
			'after_widget'    => "</li>\n", 
			'class'           => '',
			'before_sidebar'  => '',
			'after_sidebar'   => '',
			'show_in_rest'    => false,
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'sanna-shop' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'sanna-shop' ),
			'before_title'    => '<h4>', 'after_title'   => '</h4>',
			'before_widget'   => '<li>',
			'after_widget'    => "</li>\n", 
			'class'           => '',
			'before_sidebar'  => '',
			'after_sidebar'   => '',
			'show_in_rest'    => false,
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'sanna-shop' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'sanna-shop' ),
			'before_title'    => '<h4>', 'after_title'   => '</h4>',
			'before_widget'   => '<li>',
			'after_widget'    => "</li>\n", 
			'class'           => '',
			'before_sidebar'  => '',
			'after_sidebar'   => '',
			'show_in_rest'    => false,
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'sanna-shop' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'sanna-shop' ),
			'before_title'    => '<h4>', 'after_title'   => '</h4>',
			'before_widget'   => '<li>',
			'after_widget'    => "</li>\n", 
			'class'           => '',
			'before_sidebar'  => '',
			'after_sidebar'   => '',
			'show_in_rest'    => false,
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 4', 'sanna-shop' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'sanna-shop' ),
			'before_title'    => '<h4>', 'after_title'   => '</h4>',
			'before_widget'   => '<li>',
			'after_widget'    => "</li>\n", 
			'class'           => '',
			'before_sidebar'  => '',
			'after_sidebar'   => '',
			'show_in_rest'    => false,
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 5', 'sanna-shop' ),
			'id'            => 'footer-5',
			'description'   => esc_html__( 'Add widgets here.', 'sanna-shop' ),
			'before_title'    => '<h4>', 'after_title'   => '</h4>',
			'before_widget'   => '<li>',
			'after_widget'    => "</li>\n", 
			'class'           => '',
			'before_sidebar'  => '',
			'after_sidebar'   => '',
			'show_in_rest'    => false,
		)
	);
}
add_action( 'widgets_init', 'sanna_shop_widgets_init' );