<?php
/**
 * Menu Options
 */
Kirki::add_field( 'front_page_builder', array(
	'type'				 => 'toggle',
	'settings'			 => 'menu_section_enable',
	'label'				 => esc_attr__( 'Heder Menu', 'front-page-builder' ),
	'section'			 => 'menu_section',
	'default'			 => 1,
	'priority'			 => 10,
) ); 
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'typography',
	'settings'	 => 'header_menu_title_font',
	'transport'	 => 'auto',
	'label'		 => esc_attr__( 'Title Font', 'front-page-builder' ),
	'section'	 => 'menu_section',
	'transport'	 => 'auto',
	'default'	 => array(
		'font-family'	 => 'Roboto Condensed',
		'font-size'		 => '26px',
		'variant'		 => '400',
		'letter-spacing' => '0px',
		'color'			 => '#fff',
		'text-transform' => 'uppercase',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => 'h1.main-site-title a, h1.main-site-title a:hover',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'typography',
	'settings'	 => 'header_menu_font',
	'transport'	 => 'auto',
	'label'		 => esc_attr__( 'Menu Font', 'front-page-builder' ),
	'section'	 => 'menu_section',
	'transport'	 => 'auto',
	'default'	 => array(
		'font-family'	 => 'Roboto Condensed',
		'font-size'		 => '16px',
		'variant'		 => '300',
		'letter-spacing' => '0px',
		'color'			 => '#fff',
		'text-transform' => 'uppercase',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => '#fpb-main-navigation .nav a',
		),
	),
) );  
Kirki::add_field( 'front_page_builder', array(
	'type'			 => 'image',
	'settings'		 => 'header-logo',
	'label'			 => esc_attr__( 'Logo', 'front-page-builder' ),
	'section'		 => 'menu_section',
	'default'		 => '',
	'priority'		 => 10,
) );