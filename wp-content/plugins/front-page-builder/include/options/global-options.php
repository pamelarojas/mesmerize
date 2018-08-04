<?php

/**
 * Homepage Layout
 */
Kirki::add_field( 'front_page_builder', array(
	'type'			 => 'toggle',
	'settings'		 => 'force_home',
	'label'			 => esc_attr__( 'Force enable on front page', 'front-page-builder' ),
	'description'	 => esc_attr__( 'This will override WordPress homepage settings and enable the template on your front page.', 'front-page-builder' ),
	'section'		 => 'homepage_layout',
	'default'		 => 1,
	'priority'		 => 9,
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'sortable',
	'settings'	 => 'home_layout',
	'label'		 => esc_attr__( 'Homepage Blocks', 'front-page-builder' ),
	'section'	 => 'homepage_layout',
	'help'		 => esc_attr__( 'Drag and Drop and enable the homepage blocks.', 'front-page-builder' ),
	'default'	 => array( 'slider', 'services_section', 'bg_image_section', 'testimonial_section', 'blog_section', 'contact_section' ),
	'priority'	 => 10,
	'choices'	 => array(
		'slider'				 => esc_attr__( 'Slider', 'front-page-builder' ),
		'services_section'		 => esc_attr__( 'Services', 'front-page-builder' ),
		'blog_section'			 => esc_attr__( 'Blog', 'front-page-builder' ),
		'testimonial_section'	 => esc_attr__( 'Testimonial', 'front-page-builder' ),
		'custom_one_section'	 => esc_attr__( 'Custom Section #1', 'front-page-builder' ),
		'bg_image_section'		 => esc_attr__( 'Background Image', 'front-page-builder' ),
		'contact_section'		 => esc_attr__( 'Contact', 'front-page-builder' ),
	),
) );

/**
 * Sections base settings
 */
$sections = array(
	'services'		 => array(
		'color'				 => '#ffffff',
		'menu'				 => 'Services',
		'title'				 => 'Services',
		'description'		 => 'Services description',
		'title-style'		 => 'title-style-layered',
		'section-layout'	 => 'container',
		'title-font'		 => array(
			'font-family'	 => 'Oswald',
			'font-size'		 => '60px',
			'variant'		 => '700',
			'line-height'	 => '1.6',
			'letter-spacing' => '0px',
			'color'			 => '#e2e2e2',
			'text-transform' => 'uppercase',
		),
		'description-font'	 => array(
			'font-family'	 => 'Oswald',
			'font-size'		 => '25px',
			'variant'		 => '300',
			'line-height'	 => '1.6',
			'letter-spacing' => '0px',
			'color'			 => '#0a0a0a',
			'text-transform' => 'none',
			'font-backup'	 => '',
			'font-weight'	 => 300,
			'font-style'	 => 'normal',
		),
	),
	'testimonial'	 => array(
		'color'				 => '#0a0a0a',
		'menu'				 => 'Testimonials',
		'title'				 => 'Testimonials',
		'description'		 => 'Testimonial description',
		'title-style'		 => 'title-style-shadowed',
		'section-layout'	 => 'container-fluid',
		'title-font'		 => array(
			'font-family'	 => 'Oswald',
			'font-size'		 => '40px',
			'variant'		 => 'regular',
			'line-height'	 => '1.6',
			'letter-spacing' => '0px',
			'color'			 => '#ffffff',
			'text-transform' => 'none',
			'font-backup'	 => '',
			'font-weight'	 => 400,
			'font-style'	 => 'normal',
		),
		'description-font'	 => array(
			'font-family'	 => 'Oswald',
			'font-size'		 => '20px',
			'variant'		 => '300',
			'line-height'	 => '1.6',
			'letter-spacing' => '0px',
			'color'			 => '#ffffff',
			'text-transform' => 'none',
			'font-backup'	 => '',
			'font-weight'	 => 300,
			'font-style'	 => 'normal',
		),
	),
	'blog'			 => array(
		'color'				 => '#b68a8a',
		'menu'				 => 'Blog',
		'title'				 => 'News',
		'description'		 => 'From our Blog',
		'title-style'		 => 'title-style-layered',
		'section-layout'	 => 'container',
		'title-font'		 => array(
			'font-family'	 => 'Oswald',
			'font-size'		 => '65px',
			'variant'		 => '700',
			'line-height'	 => '1.6',
			'letter-spacing' => '0px',
			'color'			 => '#ffffff',
			'text-transform' => 'uppercase',
			'font-backup'	 => '',
			'font-weight'	 => 700,
			'font-style'	 => 'normal',
		),
		'description-font'	 => array(
			'font-family'	 => 'Oswald',
			'font-size'		 => '25px',
			'variant'		 => '300',
			'line-height'	 => '1.6',
			'letter-spacing' => '0px',
			'color'			 => '#000',
			'text-transform' => 'uppercase',
			'font-backup'	 => '',
			'font-weight'	 => 300,
			'font-style'	 => 'normal',
		),
	),
	'custom_one'	 => array(
		'color'				 => '#ffffff',
		'menu'				 => 'Custom',
		'title'				 => 'Custom',
		'description'		 => 'Custom description',
		'title-style'		 => 'title-style-one',
		'section-layout'	 => 'container',
		'title-font'		 => array(
			'font-family'	 => 'Roboto Condensed',
			'font-size'		 => '40px',
			'variant'		 => '400',
			'line-height'	 => '1.6',
			'letter-spacing' => '0px',
			'color'			 => '#000',
			'text-transform' => 'none',
		),
		'description-font'	 => array(
			'font-family'	 => 'Roboto Condensed',
			'font-size'		 => '20px',
			'variant'		 => '300',
			'line-height'	 => '1.6',
			'letter-spacing' => '0px',
			'color'			 => '#000',
			'text-transform' => 'none',
		),
	),
	'contact'		 => array(
		'color'				 => '#f9f9f9',
		'menu'				 => 'Contact',
		'title'				 => 'Contact Us',
		'description'		 => 'Our Contact Form',
		'title-style'		 => 'title-style-shadowed',
		'section-layout'	 => 'container',
		'title-font'		 => array(
			'font-family'	 => 'Roboto Condensed',
			'font-size'		 => '40px',
			'variant'		 => '400',
			'line-height'	 => '1.6',
			'letter-spacing' => '0px',
			'color'			 => '#000',
			'text-transform' => 'none',
		),
		'description-font'	 => array(
			'font-family'	 => 'Roboto Condensed',
			'font-size'		 => '20px',
			'variant'		 => '300',
			'line-height'	 => '1.6',
			'letter-spacing' => '0px',
			'color'			 => '#000',
			'text-transform' => 'none',
		),
	),
);



foreach ( $sections as $keys => $values ) {

	Kirki::add_field( 'front_page_builder', array(
		'type'		 => 'color',
		'settings'	 => $keys . '_section_color',
		'label'		 => esc_attr__( 'Section Background Color', 'front-page-builder' ),
		'section'	 => $keys . '_section',
		'default'	 => $values[ 'color' ],
		'priority'	 => 10,
		'transport'	 => 'auto',
		'output'	 => array(
			array(
				'element'	 => '#' . $keys . '_section .section, #fpb-main-navigation .nav a.nav-' . $keys . '_section:after',
				'property'	 => 'background-color',
			),
			array(
				'element'	 => '#' . $keys . '_section .border-bottom-left, #' . $keys . '_section .border-bottom-right',
				'property'	 => 'border-color',
			),
			array(
				'element'	 => '#' . $keys . '_section .border-bottom-arrow:after',
				'property'	 => 'border-top-color',
			),
		),
	) );
	Kirki::add_field( 'front_page_builder', array(
		'type'		 => 'text',
		'settings'	 => $keys . '_section_title',
		'label'		 => esc_attr__( 'Section Title', 'front-page-builder' ),
		'default'	 => $values[ 'title' ],
		'section'	 => $keys . '_section',
		'priority'	 => 10,
		'transport'	 => 'postMessage',
		'js_vars'	 => array(
			array(
				'element'	 => '#' . $keys . '_section .container-heading h2',
				'function'	 => 'html',
			),
		),
	) );
	Kirki::add_field( 'front_page_builder', array(
		'type'		 => 'typography',
		'settings'	 => $keys . '_top_title_font',
		'transport'	 => 'auto',
		'label'		 => esc_attr__( 'Section Title Font', 'front-page-builder' ),
		'section'	 => $keys . '_section',
		'transport'	 => 'auto',
		'default'	 => array(
			'font-family'	 => $values[ 'title-font' ][ 'font-family' ],
			'font-size'		 => $values[ 'title-font' ][ 'font-size' ],
			'variant'		 => $values[ 'title-font' ][ 'variant' ],
			'line-height'	 => $values[ 'title-font' ][ 'line-height' ],
			'letter-spacing' => $values[ 'title-font' ][ 'letter-spacing' ],
			'color'			 => $values[ 'title-font' ][ 'color' ],
			'text-transform' => $values[ 'title-font' ][ 'text-transform' ],
		),
		'priority'	 => 10,
		'output'	 => array(
			array(
				'element' => '#' . $keys . '_section .container-heading h2',
			),
			array(
				'element' => '#fpb-main-navigation .nav a.nav-' . $keys . '_section:hover, #fpb-main-navigation .nav a.nav-' . $keys . '_section.active',
				'property' => 'color',
				'choice'   => 'color',
			),
		),
	) );
	Kirki::add_field( 'front_page_builder', array(
		'type'		 => 'text',
		'settings'	 => $keys . '_section_desc',
		'label'		 => esc_attr__( 'Section Description', 'front-page-builder' ),
		'default'	 => $values[ 'description' ],
		'section'	 => $keys . '_section',
		'priority'	 => 10,
		'transport'	 => 'postMessage',
		'js_vars'	 => array(
			array(
				'element'	 => '#' . $keys . '_section .sub-title',
				'function'	 => 'html',
			),
		),
	) );
	Kirki::add_field( 'front_page_builder', array(
		'type'		 => 'typography',
		'settings'	 => $keys . '_top_description_font',
		'transport'	 => 'auto',
		'label'		 => esc_attr__( 'Section Description Font', 'front-page-builder' ),
		'section'	 => $keys . '_section',
		'transport'	 => 'auto',
		'default'	 => array(
			'font-family'	 => $values[ 'description-font' ][ 'font-family' ],
			'font-size'		 => $values[ 'description-font' ][ 'font-size' ],
			'variant'		 => $values[ 'description-font' ][ 'variant' ],
			'line-height'	 => $values[ 'description-font' ][ 'line-height' ],
			'letter-spacing' => $values[ 'description-font' ][ 'letter-spacing' ],
			'color'			 => $values[ 'description-font' ][ 'color' ],
			'text-transform' => $values[ 'description-font' ][ 'text-transform' ],
		),
		'priority'	 => 10,
		'output'	 => array(
			array(
				'element' => '#' . $keys . '_section .sub-title',
			),
		),
	) );
	Kirki::add_field( 'front_page_builder', array(
		'type'		 => 'radio-buttonset',
		'settings'	 => $keys . '_section_title_style',
		'label'		 => esc_attr__( 'Title Style', 'front-page-builder' ),
		'section'	 => $keys . '_section',
		'default'	 => $values[ 'title-style' ],
		'priority'	 => 10,
		'choices'	 => array(
			'title-style-one'		 => esc_attr__( 'Clear', 'front-page-builder' ),
			'title-style-shadowed'	 => esc_attr__( 'Shadowed', 'front-page-builder' ),
			'title-style-layered'	 => esc_attr__( 'Layered', 'front-page-builder' ),
		),
	) );
	Kirki::add_field( 'front_page_builder', array(
		'type'				 => 'spacing',
		'settings'			 => $keys . '_description_margin',
		'label'				 => esc_attr__( 'Description Position', 'front-page-builder' ),
		'section'			 => $keys . '_section',
		'transport'			 => 'auto',
		'default'			 => array(
			'top' => '-58px',
		),
		'priority'			 => 10,
		'output'			 => array(
			array(
				'element'	 => '#' . $keys . '_section .title-style-layered .sub-title',
				'property'	 => 'margin',
			),
		),
		'active_callback'	 => array(
			array(
				'setting'	 => $keys . '_section_title_style',
				'value'		 => 'title-style-layered',
				'operator'	 => '==',
			),
		),
	) );
	Kirki::add_field( 'front_page_builder', array(
		'type'		 => 'radio-buttonset',
		'settings'	 => $keys . '_section_layout',
		'label'		 => esc_attr__( 'Content Layout', 'front-page-builder' ),
		'section'	 => $keys . '_section',
		'default'	 => $values[ 'section-layout' ],
		'priority'	 => 10,
		'choices'	 => array(
			'container'			 => esc_attr__( 'Boxed', 'front-page-builder' ),
			'container-fluid'	 => esc_attr__( 'FullWidth', 'front-page-builder' ),
		),
	) );
	Kirki::add_field( 'front_page_builder', array(
		'type'		 => 'radio-image',
		'settings'	 => $keys . '_section_bottom_border',
		'label'		 => esc_attr__( 'Bottom Border Style', 'front-page-builder' ),
		'section'	 => $keys . '_section',
		'default'	 => 'border-bottom-none',
		'priority'	 => 10,
		'choices'	 => array(
			'border-bottom-none'	 => FPB_SAMPLE_PLUGIN_URL . 'img/borders/border-none.jpg',
			'border-bottom-left'	 => FPB_SAMPLE_PLUGIN_URL . 'img/borders/border-left.jpg',
			'border-bottom-right'	 => FPB_SAMPLE_PLUGIN_URL . 'img/borders/border-right.jpg',
			'border-bottom-arrow'	 => FPB_SAMPLE_PLUGIN_URL . 'img/borders/border-arrow.jpg',
		),
	) );
	Kirki::add_field( 'front_page_builder', array(
		'type'		 => 'spacing',
		'settings'	 => $keys . '_section_padding',
		'label'		 => esc_attr__( 'Section Spacing', 'front-page-builder' ),
		'section'	 => $keys . '_section',
		'transport'	 => 'auto',
		'default'	 => array(
			'top'	 => '50px',
			'bottom' => '50px',
			'left'	 => '0px',
			'right'	 => '0px',
		),
		'priority'	 => 10,
		'output'	 => array(
			array(
				'element'	 => '#' . $keys . '_section .section',
				'property'	 => 'padding',
			),
		),
	) );
	Kirki::add_field( 'front_page_builder', array(
		'type'		 => 'text',
		'settings'	 => $keys . '_section_menu_title',
		'label'		 => esc_attr__( 'Menu Title', 'front-page-builder' ),
		'default'	 => str_replace( '_', ' ', $keys ),
		'section'	 => $keys . '_section',
		'priority'	 => 10,
	) );
}
