<?php

Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'text',
	'settings'	 => 'slider_menu_title',
	'label'		 => esc_attr__( 'Menu Title', 'front-page-builder' ),
	'default'	 => 'Slider',
	'section'	 => 'slider_section',
	'priority'	 => 10,
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'slider_layout',
	'label'		 => esc_attr__( 'Slider Layout', 'front-page-builder' ),
	'section'	 => 'slider_section',
	'default'	 => 'container-fluid',
	'priority'	 => 10,
	'choices'	 => array(
		'container-fluid'	 => esc_attr__( 'Wide', 'front-page-builder' ),
		'container'			 => esc_attr__( 'Boxed', 'front-page-builder' ),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'spacing',
	'settings'	 => 'slider_spacing',
	'label'		 => esc_attr__( 'Spacing', 'front-page-builder' ),
	'section'	 => 'slider_section',
	'transport'	 => 'auto',
	'default'	 => array(
		'top'	 => '0px',
		'bottom' => '0px',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element'	 => '#slider',
			'property'	 => 'padding',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'color',
	'settings'	 => 'slider_bg_color',
	'label'		 => esc_attr__( 'Slider Background Color', 'front-page-builder' ),
	'section'	 => 'slider_section',
	'default'	 => '#212121',
	'priority'	 => 10,
	'transport'	 => 'auto',
	'output'	 => array(
		array(
			'element'	 => '#slider, #fpb-main-navigation .nav a.nav-slider:after, #fpb-main-navigation .nav a.nav-slider.active:after',
			'property'	 => 'background-color',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'radio-image',
	'settings'	 => 'slider_bg_overlay',
	'label'		 => esc_attr__( 'Slider Images Overlay', 'front-page-builder' ),
	'section'	 => 'slider_section',
	'default'	 => '',
	'priority'	 => 10,
	'choices'	 => array(
		''												 => FPB_SAMPLE_PLUGIN_URL . 'img/pattern/none.png',
		FPB_SAMPLE_PLUGIN_URL . 'img/pattern/bg_1.png'	 => FPB_SAMPLE_PLUGIN_URL . 'img/pattern/bg_1.png',
		FPB_SAMPLE_PLUGIN_URL . 'img/pattern/bg_2.png'	 => FPB_SAMPLE_PLUGIN_URL . 'img/pattern/bg_2.png',
		FPB_SAMPLE_PLUGIN_URL . 'img/pattern/bg_3.png'	 => FPB_SAMPLE_PLUGIN_URL . 'img/pattern/bg_3.png',
		FPB_SAMPLE_PLUGIN_URL . 'img/pattern/bg_4.png'	 => FPB_SAMPLE_PLUGIN_URL . 'img/pattern/bg_4.png',
		FPB_SAMPLE_PLUGIN_URL . 'img/pattern/bg_5.png'	 => FPB_SAMPLE_PLUGIN_URL . 'img/pattern/bg_5.png',
		FPB_SAMPLE_PLUGIN_URL . 'img/pattern/bg_6.png'	 => FPB_SAMPLE_PLUGIN_URL . 'img/pattern/bg_6.png',
	),
	'output'	 => array(
		array(
			'element'	 => '.homepage-slider .slides > li:after',
			'property'	 => 'background-image',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'slider',
	'settings'	 => 'slider_height',
	'label'		 => esc_attr__( 'Slider height', 'front-page-builder' ),
	'section'	 => 'slider_section',
	'default'	 => 790,
	'priority'	 => 10,
	'transport'	 => 'auto',
	'choices'	 => array(
		'min'	 => '300',
		'max'	 => '1080',
		'step'	 => '10',
	),
	'output'	 => array(
		array(
			'element'		 => '.homepage-slider, .flexslider-inner-container, .flexslider-inner, .flexslider-container, .homepage-slider .slides, .homepage-slider .flex-viewport, .flexslider-inner-container, .flexslider-inner',
			'property'		 => 'height',
			'units'			 => 'px',
			'media_query'	 => '@media (min-width: 768px)',
		),
		array(
			'element'		 => '.flexslider-inner:before',
			'property'		 => 'border-top-width',
			'units'			 => 'px',
			'media_query'	 => '@media (min-width: 768px)',
		),
		array(
			'element'		 => '.flexslider-inner:after',
			'property'		 => 'border-bottom-width',
			'units'			 => 'px',
			'media_query'	 => '@media (min-width: 768px)',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'slider',
	'settings'	 => 'slider_height_mobile',
	'label'		 => esc_attr__( 'Slider height on mobile devices', 'front-page-builder' ),
	'section'	 => 'slider_section',
	'default'	 => 400,
	'priority'	 => 10,
	'transport'	 => 'auto',
	'choices'	 => array(
		'min'	 => '200',
		'max'	 => '1080',
		'step'	 => '10',
	),
	'output'	 => array(
		array(
			'element'		 => '.homepage-slider, .flexslider-inner-container, .flexslider-inner, .flexslider-container, .homepage-slider .slides, .homepage-slider .flex-viewport',
			'property'		 => 'height',
			'units'			 => 'px',
			'media_query'	 => '@media (max-width: 767px)',
		),
		array(
			'element'		 => '.flexslider-inner:before',
			'property'		 => 'border-top-width',
			'units'			 => 'px',
			'media_query'	 => '@media (max-width: 767px)',
		),
		array(
			'element'		 => '.flexslider-inner:after',
			'property'		 => 'border-bottom-width',
			'units'			 => 'px',
			'media_query'	 => '@media (max-width: 767px)',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'slider',
	'settings'	 => 'slider_interval',
	'label'		 => esc_attr__( 'Slider Interval', 'front-page-builder' ),
	'section'	 => 'slider_section',
	'priority'	 => 10,
	'default'	 => 7000,
	'choices'	 => array(
		'min'	 => '2000',
		'max'	 => '20000',
		'step'	 => '500',
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'slider_animation',
	'label'		 => esc_attr__( 'Slider Animation', 'front-page-builder' ),
	'section'	 => 'slider_section',
	'default'	 => 'slide',
	'priority'	 => 10,
	'choices'	 => array(
		'slide'	 => esc_attr__( 'Slide', 'front-page-builder' ),
		'fade'	 => esc_attr__( 'Fade', 'front-page-builder' ),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'radio-buttonset',
	'settings'	 => 'slider_start',
	'label'		 => esc_attr__( 'Animate Slider Automatically', 'front-page-builder' ),
	'section'	 => 'slider_section',
	'default'	 => 'true',
	'priority'	 => 10,
	'choices'	 => array(
		'true'	 => esc_attr__( 'Yes', 'front-page-builder' ),
		'false'	 => esc_attr__( 'No', 'front-page-builder' ),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'typography',
	'settings'	 => 'slider_title_font',
	'transport'	 => 'auto',
	'label'		 => esc_attr__( 'Slider Title Font', 'front-page-builder' ),
	'section'	 => 'slider_section',
	'transport'	 => 'auto',
	'default'	 => array(
		'font-family'	 => 'Roboto Condensed',
		'font-size'		 => '35px',
		'variant'		 => '400',
		'line-height'	 => '1.6',
		'letter-spacing' => '0px',
		'color'			 => '#fff',
		'text-transform' => 'none',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => '.homepage-slider h2.flexslider-title',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'typography',
	'settings'	 => 'slider_description_font',
	'transport'	 => 'auto',
	'label'		 => esc_attr__( 'Slider Description Font', 'front-page-builder' ),
	'section'	 => 'slider_section',
	'transport'	 => 'auto',
	'default'	 => array(
		'font-family'	 => 'Roboto Condensed',
		'font-size'		 => '18px',
		'variant'		 => '300italic',
		'line-height'	 => '1.6',
		'letter-spacing' => '0px',
		'color'			 => '#fff',
		'text-transform' => 'none',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => '.homepage-slider .flexslider-inner p',
		),
	),
) );

Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'color',
	'settings'	 => 'slider_caption_color',
	'label'		 => esc_attr__( 'Slider Caption Background Color', 'front-page-builder' ),
	'section'	 => 'slider_section',
	'default'	 => 'rgba(255,255,255,0)',
	'choices'	 => array(
		'alpha' => true,
	),
	'priority'	 => 10,
	'transport'	 => 'auto',
	'output'	 => array(
		array(
			'element'	 => '.flexslider-inner',
			'property'	 => 'background-color',
		),
		array(
			'element'	 => '.flexslider-inner:after',
			'property'	 => 'border-right-color',
		),
		array(
			'element'	 => '.flexslider-inner:before',
			'property'	 => 'border-left-color',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'multicolor',
	'settings'	 => 'slider_section_button_color',
	'section'	 => 'slider_section',
	'priority'	 => 10,
	'choices'	 => array(
		'color'	 => esc_attr__( 'Button Color', 'front-page-builder' ),
		'hover'	 => esc_attr__( 'Button Hover Color', 'front-page-builder' ),
	),
	'default'	 => array(
		'color'	 => '#ffffff',
		'hover'	 => '#cecece',
	),
	'transport'	 => 'auto',
	'output'	 => array(
		array(
			'choice'	 => 'color',
			'element'	 => '#slider a.btn.btn-default.fpb-button',
			'property'	 => 'color',
		),
		array(
			'choice'	 => 'color',
			'element'	 => '#slider a.btn.btn-default.fpb-button',
			'property'	 => 'border-color',
		),
		array(
			'choice'	 => 'hover',
			'element'	 => '#slider a.btn.btn-default.fpb-button:hover',
			'property'	 => 'color',
		),
		array(
			'choice'	 => 'hover',
			'element'	 => '#slider a.btn.btn-default.fpb-button:hover',
			'property'	 => 'border-color',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'repeater',
	'settings'	 => 'repeater_slider',
	'label'		 => esc_attr__( 'Slides', 'front-page-builder' ),
	'section'	 => 'slider_section',
	'priority'	 => 10,
	'default'	 => array(
		array(
			'home_slider_image'			 => FPB_SAMPLE_PLUGIN_URL . 'img/slider/slide1.jpg',
			'home_slider_title'			 => 'Slide One',
			'home_slider_desc'			 => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.',
			'home_slider_url'			 => '#',
			'home_slider_button_text'	 => 'Read more',
			'home_slider_position'		 => 'slider-center',
		),
		array(
			'home_slider_image'			 => FPB_SAMPLE_PLUGIN_URL . 'img/slider/slide2.jpg',
			'home_slider_title'			 => 'Slide two',
			'home_slider_desc'			 => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.',
			'home_slider_url'			 => '#',
			'home_slider_button_text'	 => 'Read more',
			'home_slider_position'		 => 'slider-center',
		) ),
	'fields'	 => array(
		'home_slider_image'			 => array(
			'type'		 => 'image',
			'label'		 => esc_attr__( 'Image', 'front-page-builder' ),
			'default'	 => '',
		),
		'home_slider_title'			 => array(
			'type'		 => 'text',
			'label'		 => esc_attr__( 'Title', 'front-page-builder' ),
			'default'	 => '',
		),
		'home_slider_desc'			 => array(
			'type'		 => 'text',
			'label'		 => esc_attr__( 'Description', 'front-page-builder' ),
			'default'	 => '',
		),
		'home_slider_url'			 => array(
			'type'		 => 'text',
			'label'		 => esc_attr__( 'URL', 'front-page-builder' ),
			'default'	 => '',
		),
		'home_slider_button_text'	 => array(
			'type'		 => 'text',
			'label'		 => esc_attr__( 'Button text', 'front-page-builder' ),
			'default'	 => '',
		),
		'home_slider_position'		 => array(
			'type'		 => 'select',
			'label'		 => esc_attr__( 'Caption Position', 'front-page-builder' ),
			'default'	 => 'slider-center',
			'choices'	 => array(
				'slider-left'	 => esc_attr__( 'Left', 'front-page-builder' ),
				'slider-center'	 => esc_attr__( 'Center', 'front-page-builder' ),
				'slider-right'	 => esc_attr__( 'Right', 'front-page-builder' ),
			),
		),
	),
	'row_label'	 => array(
		'type'	 => 'text',
		'value'	 => esc_attr__( 'Slide', 'front-page-builder' ),
	),
) );

function add_extra_options_slider( $default ) {

	$extra_slider = array(
		
	);

	// combine the two arrays
	$default = wp_parse_args( $extra_slider, $default );

	return $default;
}

add_filter( 'fpb_default_options', 'add_extra_options_slider' );
