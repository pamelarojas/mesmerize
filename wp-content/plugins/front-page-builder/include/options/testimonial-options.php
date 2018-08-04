<?php

/**
 * Testimonial Section
 */
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'typography',
	'settings'	 => 'testimonial_content_font',
	'transport'	 => 'auto',
	'label'		 => esc_attr__( 'Testimonial Font', 'front-page-builder' ),
	'section'	 => 'testimonial_section',
	'transport'	 => 'auto',
	'default'	 => array(
		'font-family'	 => 'Roboto Condensed',
		'font-size'		 => '17px',
		'variant'		 => '300',
		'line-height'	 => '1.6',
		'letter-spacing' => '0px',
		'color'			 => '#ffffff',
		'text-transform' => 'none',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => '#testimonial_section p',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'typography',
	'settings'	 => 'testimonial_name_font',
	'transport'	 => 'auto',
	'label'		 => esc_attr__( 'Testimonial Name Font', 'front-page-builder' ),
	'section'	 => 'testimonial_section',
	'transport'	 => 'auto',
	'default'	 => array(
		'font-family'	 => 'Roboto Condensed',
		'font-size'		 => '14px',
		'variant'		 => '300',
		'line-height'	 => '1.6',
		'letter-spacing' => '0px',
		'color'			 => '#ffffff',
		'text-transform' => 'none',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => '#testimonial_section small',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'multicolor',
	'settings'	 => 'testimonial_section_links',
	'section'	 => 'testimonial_section',
	'priority'	 => 10,
	'choices'	 => array(
		'link'		 => esc_attr__( 'Links Color', 'front-page-builder' ),
		'linkhover'	 => esc_attr__( 'Links Hover Color', 'front-page-builder' ),
	),
	'default'	 => array(
		'link'		 => '#fab000',
		'linkhover'	 => '#fab000',
	),
	'transport'	 => 'auto',
	'output'	 => array(
		array(
			'choice'	 => 'link',
			'element'	 => '#testimonial_section a',
			'property'	 => 'color',
		),
		array(
			'choice'	 => 'linkhover',
			'element'	 => '#testimonial_section a:hover',
			'property'	 => 'color',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'testimonial_autostart',
	'label'		 => esc_attr__( 'Animate Carousel Automatically', 'front-page-builder' ),
	'section'	 => 'testimonial_section',
	'default'	 => 'true',
	'priority'	 => 11,
	'choices'	 => array(
		'true'	 => esc_attr__( 'Yes', 'front-page-builder' ),
		'false'	 => esc_attr__( 'No', 'front-page-builder' ),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'				 => 'slider',
	'settings'			 => 'testimonial_interval',
	'label'				 => esc_attr__( 'Carousel Interval', 'front-page-builder' ),
	'section'			 => 'testimonial_section',
	'priority'			 => 12,
	'default'			 => 7500,
	'choices'			 => array(
		'min'	 => '2000',
		'max'	 => '30000',
		'step'	 => '500',
	),
	'active_callback'	 => array(
		array(
			'setting'	 => 'testimonial_autostart',
			'operator'	 => '==',
			'value'		 => 'true',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'				 => 'repeater',
	'label'				 => esc_attr__( 'Testimonials', 'front-page-builder' ),
	'section'			 => 'testimonial_section',
	'priority'			 => 13,
	'settings'			 => 'repeater_testimonial',
	'sanitize_callback'	 => 'wp_kses_post',
	'default'			 => array(
		array(
			'testimonial_image'	 => FPB_SAMPLE_PLUGIN_URL . 'img/testimonials/face1.jpg',
			'testimonial_name'	 => 'Themes4WP.com',
			'testimonial_desc'	 => 'Themes4WP is specialized in developing fast and SEO optimized Free and Premium WordPress Themes which are suitable for dynamic News Websites, Online Magazines and WooCommerce websites.',
			'testimonial_url'	 => 'https://themes4wp.com/',
		),
		array(
			'testimonial_image'	 => FPB_SAMPLE_PLUGIN_URL . 'img/testimonials/face2.jpg',
			'testimonial_name'	 => 'WordPress.org',
			'testimonial_desc'	 => 'WordPress is web software you can use to create a beautiful website, blog, or app. We like to say that WordPress is both free and priceless at the same time.',
			'testimonial_url'	 => 'https://wordpress.org/',
		),
	),
	'fields'			 => array(
		'testimonial_image'	 => array(
			'type'		 => 'image',
			'label'		 => esc_attr__( 'Photo', 'front-page-builder' ),
			'default'	 => '',
		),
		'testimonial_name'	 => array(
			'type'		 => 'text',
			'label'		 => esc_attr__( 'Name', 'front-page-builder' ),
			'default'	 => '',
		),
		'testimonial_desc'	 => array(
			'type'		 => 'textarea',
			'label'		 => esc_attr__( 'Testimonial', 'front-page-builder' ),
			'default'	 => '',
		),
		'testimonial_url'	 => array(
			'type'		 => 'text',
			'label'		 => esc_attr__( 'Link', 'front-page-builder' ),
			'default'	 => '',
		),
	),
	'row_label'			 => array(
		'type'	 => 'text',
		'value'	 => esc_attr__( 'Testimonial', 'front-page-builder' ),
	),
) );
