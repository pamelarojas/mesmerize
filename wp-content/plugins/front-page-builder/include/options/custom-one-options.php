<?php
/**
 * Custom Page #1 Section
 */
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'typography',
	'settings'	 => 'custom_one_content_font',
	'transport'	 => 'auto',
	'label'		 => esc_attr__( 'Section Font', 'front-page-builder' ),
	'section'	 => 'custom_one_section',
	'transport'	 => 'auto',
	'default'	 => array(
		'font-family'	 => 'Roboto Condensed',
		'font-size'		 => '17px',
		'variant'		 => '300',
		'line-height'	 => '1.6',
		'letter-spacing' => '0px',
		'color'			 => '#222',
		'text-transform' => 'none',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => '#custom_one_section',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'multicolor',
	'settings'	 => 'custom_one_section_links',
	'section'	 => 'custom_one_section',
	'priority'	 => 10,
	'choices'	 => array(
		'link'	 => esc_attr__( 'Links Color', 'front-page-builder' ),
    'linkhover'	 => esc_attr__( 'Links Hover Color', 'front-page-builder' ),
	),
	'default'	 => array(
		'link'	 => '#fab000',
		'linkhover'	 => '#fab000',
	),
	'transport'	 => 'auto',
	'output'	 => array(
		array(
			'choice'	 => 'link',
			'element'	 => '#custom_one_section a',
			'property'	 => 'color',
		),
		array(
			'choice'	 => 'linkhover',
			'element'	 => '#custom_one_section a:hover',
			'property'	 => 'color',
		),
	),
) );  

Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'select',
	'settings'	 => 'custom_one_page',
	'label'		 => esc_attr__( 'Select Page Content', 'front-page-builder' ),
	'section'	 => 'custom_one_section',
	'default'	 => '',
	'priority'	 => 10,
	'choices'	 => Kirki_Helper::get_posts( array( 'posts_per_page' => -1, 'post_type' => 'page' ) ),
) );