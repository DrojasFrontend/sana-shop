<?php

if( function_exists('acf_add_options_page') ) {
    
  acf_add_options_page(array(
    'page_title'    => 'Configuración general del tema',
    'menu_title'    => 'Ajustes de tema',
    'menu_slug'     => 'theme-general-settings',
    'capability'    => 'edit_posts',
    'redirect'      => false
  ));
}

function register_acf_block_types()
{
	
	if (function_exists('acf_register_block_type')) {

		// Register Block Hero.
		acf_register_block_type(
			[
				'name' => 'block-hero',
				'title' => __('Block Hero'),
				'description' => __('Block Hero.'),
				'category' => 'formatting',
				'icon' => 'images-alt2',
				'keywords' => ['block', 'custom', 'hero', 'quote'],
				'render_template' => '/template-parts/blocks/block-hero.php',
				'mode' => 'edit',
			]
		);

		// Register Block Tab.
		acf_register_block_type(
			[
				'name' => 'block-tab-collection',
				'title' => __('Block Tab Collection'),
				'description' => __('Block Tab Collection.'),
				'category' => 'formatting',
				'icon' => 'images-alt2',
				'keywords' => ['block', 'custom', 'tab', 'quote'],
				'render_template' => '/template-parts/blocks/block-tab-collection.php',
				'mode' => 'edit',
			]
		);

		// Register Block Two Images.
		acf_register_block_type(
			[
				'name' => 'block-two-images',
				'title' => __('Block Two Images'),
				'description' => __('Block Two Images.'),
				'category' => 'formatting',
				'icon' => 'images-alt2',
				'keywords' => ['block', 'custom', 'image', 'quote'],
				'render_template' => '/template-parts/blocks/block-two-images.php',
				'mode' => 'edit',
			]
		);

		// Register Block Title.
		acf_register_block_type(
			[
				'name' => 'block-title',
				'title' => __('Block Title'),
				'description' => __('Block Title.'),
				'category' => 'formatting',
				'icon' => 'images-alt2',
				'keywords' => ['block', 'custom', 'text', 'quote'],
				'render_template' => '/template-parts/blocks/block-title.php',
				'mode' => 'edit',
			]
		);

		// Register Block Image and Text.
		acf_register_block_type(
			[
				'name' => 'block-image-text',
				'title' => __('Block Image And Text'),
				'description' => __('Block Image And Text.'),
				'category' => 'formatting',
				'icon' => 'images-alt2',
				'keywords' => ['block', 'custom', 'image', 'quote'],
				'render_template' => '/template-parts/blocks/block-image-text.php',
				'mode' => 'edit',
			]
		);

		// Register Block New Season.
		acf_register_block_type(
			[
				'name' => 'block-new-season',
				'title' => __('Block New Seasont'),
				'description' => __('Block New Seasont.'),
				'category' => 'formatting',
				'icon' => 'images-alt2',
				'keywords' => ['block', 'custom', 'image', 'quote'],
				'render_template' => '/template-parts/blocks/block-new-season.php',
				'mode' => 'edit',
			]
		);

		// Register Block Accordion.
		acf_register_block_type(
			[
				'name' => 'block-accordion',
				'title' => __('Block Accordion'),
				'description' => __('Block Accordion.'),
				'category' => 'formatting',
				'icon' => 'images-alt2',
				'keywords' => ['block', 'custom', 'image', 'quote'],
				'render_template' => '/template-parts/blocks/block-accordion.php',
				'mode' => 'edit',
			]
		);
	}
}

add_action('acf/init', 'register_acf_block_types');