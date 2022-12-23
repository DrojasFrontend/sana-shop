<?php

function sanna_shop_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Filter Shop', 'sanna-shop' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sanna-shop' ),
			'before_title'    => '<h4>', 'after_title'   => '</h4>',
			'before_widget'   => '<li class="sidebar-1">',
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
			'before_widget'   => '<li class="footer-6">',
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
			'before_widget'   => '<li class="footer-1">',
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
			'before_widget'   => '<li class="footer-2"><input type="checkbox"><i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16"> <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/> </svg></i>',
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
			'before_widget'   => '<li class="footer-3"><input type="checkbox"><i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16"> <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/> </svg></i>',
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
			'before_widget'   => '<li class="footer-4">',
			'after_widget'    => "</li>\n", 
			'class'           => 'footer-4',
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
			'before_widget'   => '<li class="footer-5">',
			'after_widget'    => "</li>\n", 
			'class'           => '',
			'before_sidebar'  => '',
			'after_sidebar'   => '',
			'show_in_rest'    => false,
		)
	);
}
add_action( 'widgets_init', 'sanna_shop_widgets_init' );