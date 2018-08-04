<?php

/**
 * Background image Section
 */
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'text',
	'settings'	 => 'bg_image_section_menu_title',
	'label'		 => esc_attr__( 'Menu Title', 'front-page-builder' ),
	'default'	 => 'BG Image',
	'section'	 => 'bg_image_section',
	'priority'	 => 10,
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'bg_image_section_layout',
	'label'		 => esc_attr__( 'Content Layout', 'front-page-builder' ),
	'section'	 => 'bg_image_section',
	'default'	 => 'container-fluid',
	'priority'	 => 10,
	'choices'	 => array(
		'container'			 => esc_attr__( 'Boxed', 'front-page-builder' ),
		'container-fluid'	 => esc_attr__( 'FullWidth', 'front-page-builder' ),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'background',
	'settings'	 => 'bg_image_section_img',
	'label'		 => esc_attr__( 'Background Image', 'front-page-builder' ),
	'section'	 => 'bg_image_section',
	'transport'	 => 'auto',
	'default'	 => array(
		'background-color'		 => '#0a0a0a',
		'background-image'		 => FPB_SAMPLE_PLUGIN_URL . 'img/bgimg/bgimg.jpg',
		'background-repeat'		 => 'no-repeat',
		'background-position'	 => 'center center',
		'background-size'		 => 'cover',
		'background-attachment'	 => 'scroll',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => '#bg_image_section',
		),
		//array(
		//		'element' => '#fpb-main-navigation .nav a.nav-bg_image_section:after, #fpb-main-navigation .nav a.nav-bg_image_section.active:after',
		//		'property' => 'background-color',
		//		'choice'   => 'background-color',
		//),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'typography',
	'settings'	 => 'bg_image_section_title_font',
	'transport'	 => 'auto',
	'label'		 => esc_attr__( 'Title Font', 'front-page-builder' ),
	'section'	 => 'bg_image_section',
	'transport'	 => 'auto',
	'default'	 => array(
		'font-family'	 => 'Oswald',
		'font-size'		 => '55px',
		'variant'		 => '300',
		'line-height'	 => '1.1',
		'letter-spacing' => '0px',
		'color'			 => '#ffffff',
		'text-transform' => 'uppercase',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => '#bg_image_section .bg-section-title',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'typography',
	'settings'	 => 'bg_image_section_description_font',
	'transport'	 => 'auto',
	'label'		 => esc_attr__( 'Description Font', 'front-page-builder' ),
	'section'	 => 'bg_image_section',
	'transport'	 => 'auto',
	'default'	 => array(
		'font-family'	 => 'Oswald',
		'font-size'		 => '18px',
		'variant'		 => '200',
		'line-height'	 => '1.6',
		'letter-spacing' => '0px',
		'color'			 => '#ffffff',
		'text-transform' => 'none',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => '#bg_image_section .bg-section-desc',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'color',
	'settings'	 => 'bg_image_section_main_bg_color',
	'label'		 => esc_attr__( 'Caption background color', 'front-page-builder' ),
	'section'	 => 'bg_image_section',
	'default'	 => 'rgba(0,0,0,0.21)',
	'choices'	 => array(
		'alpha' => true,
	),
	'transport'	 => 'auto',
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element'	 => '.bg-image-section',
			'property'	 => 'background-color',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'text',
	'settings'	 => 'bg_image_section_title',
	'label'		 => esc_attr__( 'Title', 'front-page-builder' ),
	'section'	 => 'bg_image_section',
	'default'	 => 'About Us',
	'priority'	 => 10,
	'transport'	 => 'postMessage',
	'js_vars'	 => array(
		array(
			'element'	 => '#bg_image_section .bg-section-title',
			'function'	 => 'html',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'textarea',
	'settings'	 => 'bg_image_section_desc',
	'label'		 => esc_attr__( 'Description', 'front-page-builder' ),
	'section'	 => 'bg_image_section',
	'default'	 => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Fusce nibh. Aliquam erat volutpat. Nullam sit amet magna in magna gravida vehicula. Vivamus porttitor turpis ac leo. Fusce wisi. Duis condimentum augue id magna semper rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Cras elementum. Nullam sit amet magna in magna gravida vehicula. Donec vitae arcu. Integer in sapien. Mauris suscipit, ligula sit amet pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus.',
	'priority'	 => 10,
	'transport'	 => 'postMessage',
	'js_vars'	 => array(
		array(
			'element'	 => '#bg_image_section .bg-section-desc',
			'function'	 => 'html',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'text',
	'settings'	 => 'bg_image_section_button',
	'label'		 => esc_attr__( 'Button Text', 'front-page-builder' ),
	'section'	 => 'bg_image_section',
	'default'	 => 'Read More',
	'priority'	 => 10,
	'transport'	 => 'postMessage',
	'js_vars'	 => array(
		array(
			'element'	 => '#bg_image_section .bg-section-button a',
			'function'	 => 'html',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'text',
	'settings'	 => 'bg_image_section_button_url',
	'label'		 => esc_attr__( 'Button URL', 'front-page-builder' ),
	'section'	 => 'bg_image_section',
	'default'	 => '#',
	'priority'	 => 10,
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'multicolor',
	'settings'	 => 'bg_image_section_btn_color',
	'label'		 => esc_attr__( 'Button Color', 'front-page-builder' ),
	'section'	 => 'bg_image_section',
	'transport'	 => 'auto',
	'priority'	 => 10,
	'choices'	 => array(
		'link'	 => esc_attr__( 'Color', 'front-page-builder' ),
		'hover'	 => esc_attr__( 'Hover', 'front-page-builder' ),
	),
	'default'	 => array(
		'link'	 => '#FFFFFF',
		'hover'	 => '#dd9933',
	),
	'output'	 => array(
		array(
			'choice'	 => 'link',
			'element'	 => '.bg-section-button a',
			'property'	 => 'color',
		),
		array(
			'choice'	 => 'hover',
			'element'	 => '.bg-section-button a:hover',
			'property'	 => 'color',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'bg_image_section_position',
	'label'		 => esc_attr__( 'Content position', 'front-page-builder' ),
	'section'	 => 'bg_image_section',
	'default'	 => 'left',
	'priority'	 => 10,
	'choices'	 => array(
		'left'	 => esc_attr__( 'Left', 'front-page-builder' ),
		'right'	 => esc_attr__( 'Right', 'front-page-builder' ),
	),
	'output'	 => array(
		array(
			'element'	 => '.bg-image-section',
			'property'	 => 'float',
		),
		array(
			'element'	 => '.bg-image-section',
			'property'	 => 'text-align',
		),
	),
) );

