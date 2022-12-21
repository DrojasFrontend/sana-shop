<?php
// Widgets
function sanna_register_sidebars() {

  register_sidebar(array(
    'name'            => __( 'Share Social', 'sanna' ),
    'id'              => 'share-social',
    'before_widget'   => '<div id="%1$s" class="widget %2$s">',
    'after_widget'    => '</div>', 
    'before_title'    => '<h4>', 'after_title'   => '</h4>',
    'before_widget'   => '<li id="%1$s" class="widget %2$s">',
    'after_widget'    => "</li>\n", 
    'description'     => '',
    'class'           => '',
    'before_title'    => '<h2 class="widgettitle">',
    'after_title'     => "</h2>\n",
    'before_sidebar'  => '',
    'after_sidebar'   => '',
    'show_in_rest'    => false,
    )
  );
}

add_action( 'widgets_init', 'sanna_register_sidebars' );