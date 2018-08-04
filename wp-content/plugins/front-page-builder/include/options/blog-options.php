<?php

/**
 * Blog Section
 */
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'slider',
	'settings'	 => 'blog_section_number_posts',
	'label'		 => esc_attr__( 'Number of posts', 'front-page-builder' ),
	'section'	 => 'blog_section',
	'default'	 => 3,
	'priority'	 => 10,
	'choices'	 => array(
		'min'	 => 1,
		'max'	 => 18,
		'step'	 => 1,
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'blog_section_style',
	'label'		 => esc_attr__( 'Layout', 'front-page-builder' ),
	'section'	 => 'blog_section',
	'default'	 => 'grid',
	'priority'	 => 10,
	'choices'	 => array(
		'fullwidth'	 => esc_attr__( 'FullWidth', 'front-page-builder' ),
		'inline'	 => esc_attr__( 'Inline', 'front-page-builder' ),
		'grid'		 => esc_attr__( 'Grid', 'front-page-builder' ),
		'imgs'		 => esc_attr__( 'Images', 'front-page-builder' ),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'				 => 'radio-buttonset',
	'settings'			 => 'blog_section_per_row',
	'label'				 => esc_attr__( 'Posts per row', 'front-page-builder' ),
	'section'			 => 'blog_section',
	'default'			 => '4',
	'priority'			 => 10,
	'choices'			 => array(
		'4'	 => '3',
		'3'	 => '4',
		'15' => '5',
		'2'	 => '6',
	),
	'active_callback'	 => array(
		array(
			'setting'	 => 'blog_section_style',
			'operator'	 => 'contains',
			'value'		 => array( 'grid', 'imgs' ),
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'typography',
	'settings'	 => 'blog_title_font',
	'transport'	 => 'auto',
	'label'		 => esc_attr__( 'Blog Title Font', 'front-page-builder' ),
	'section'	 => 'blog_section',
	'transport'	 => 'auto',
	'default'	 => array(
		'font-family'	 => 'Roboto Condensed',
		'font-size'		 => '30px',
		'variant'		 => '700',
		'line-height'	 => '1.1',
		'letter-spacing' => '0px',
		'color'			 => '#ffffff',
		'text-transform' => 'uppercase',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => '#blog_section .page-header a, #blog_section .page-header',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'typography',
	'settings'	 => 'blog_content_font',
	'transport'	 => 'auto',
	'label'		 => esc_attr__( 'Blog Excerpt Font', 'front-page-builder' ),
	'section'	 => 'blog_section',
	'transport'	 => 'auto',
	'default'	 => array(
		'font-family'	 => 'Roboto Condensed',
		'font-size'		 => '16px',
		'variant'		 => '300',
		'line-height'	 => '1.6',
		'letter-spacing' => '0px',
		'color'			 => '#ffffff',
		'text-transform' => 'none',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => '#blog_section .entry-summary',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'multicolor',
	'settings'	 => 'blog_section_links_date',
	'section'	 => 'blog_section',
	'priority'	 => 10,
	'choices'	 => array(
		'link'		 => esc_attr__( 'Links Color', 'front-page-builder' ),
		'linkhover'	 => esc_attr__( 'Links Hover Color', 'front-page-builder' ),
		'text'		 => esc_attr__( 'Text Color', 'front-page-builder' ),
	),
	'default'	 => array(
		'link'		 => '#dd9933',
		'linkhover'	 => '#666',
		'text'		 => '#212121',
	),
	'transport'	 => 'auto',
	'output'	 => array(
		array(
			'choice'	 => 'link',
			'element'	 => '.blog-home a',
			'property'	 => 'color',
		),
		array(
			'choice'	 => 'linkhover',
			'element'	 => '.blog-home a:hover',
			'property'	 => 'color',
		),
		array(
			'choice'	 => 'text',
			'element'	 => '.blog-home, .blog-home .single-meta-date .day, .blog-home .single-meta-date .month, .blog-home .single-meta-date .year',
			'property'	 => 'color',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'multicolor',
	'settings'	 => 'blog_section_button_color',
	'section'	 => 'blog_section',
	'priority'	 => 10,
	'choices'	 => array(
		'color'	 => esc_attr__( 'Button Color', 'front-page-builder' ),
		'hover'	 => esc_attr__( 'Button Hover Color', 'front-page-builder' ),
	),
	'default'	 => array(
		'color'	 => '#ffffff',
		'hover'	 => '#dd9933',
	),
	'transport'	 => 'auto',
	'output'	 => array(
		array(
			'choice'	 => 'color',
			'element'	 => 'a.btn.btn-default.fpb-button',
			'property'	 => 'color',
		),
		array(
			'choice'	 => 'color',
			'element'	 => 'a.btn.btn-default.fpb-button',
			'property'	 => 'border-color',
		),
		array(
			'choice'	 => 'hover',
			'element'	 => 'a.btn.btn-default.fpb-button:hover',
			'property'	 => 'color',
		),
		array(
			'choice'	 => 'hover',
			'element'	 => 'a.btn.btn-default.fpb-button:hover',
			'property'	 => 'border-color',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'				 => 'toggle',
	'settings'			 => 'blog_section_button',
	'label'				 => esc_attr__( 'Button to archive', 'front-page-builder' ),
	'section'			 => 'blog_section',
	'default'			 => 0,
	'priority'			 => 10,
	'active_callback'	 => array(
		array(
			'setting'	 => 'page_for_posts',
			'operator'	 => '==',
			'value'		 => '0',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'				 => 'text',
	'settings'			 => 'blog_section_button_text',
	'label'				 => esc_attr__( 'Button Text', 'front-page-builder' ),
	'default'			 => 'View all posts',
	'section'			 => 'blog_section',
	'priority'			 => 10,
	'active_callback'	 => array(
		array(
			'setting'	 => 'page_for_posts',
			'operator'	 => '==',
			'value'		 => '0',
		),
		array(
			'setting'	 => 'blog_section_button',
			'operator'	 => '==',
			'value'		 => 1,
		),
	),
) );
