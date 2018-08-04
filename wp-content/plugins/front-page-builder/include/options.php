<?php

if ( !class_exists( 'Kirki' ) ) {
	return;
}
/* Import kirki CSS into a file instead inline print */
//add_filter( 'kirki_dynamic_css_method', function() {
//    return 'file';
//} );
/* Register the config */
Kirki::add_config( 'front_page_builder', array(
	'capability'	 => 'edit_theme_options',
	'option_type'	 => 'option',
	'option_name'	 => 'front_page_builder_options',
) );

/**
 * Add sections
 */
Kirki::add_panel( 'homepage', array(
	'priority'	 => 10,
	'title'		 => esc_attr__( 'Front Page Builder Settings', 'front-page-builder' ),
) );

Kirki::add_section( 'homepage_layout', array(
	'title'		 => esc_attr__( 'Front Page Layout', 'front-page-builder' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
include_once( plugin_dir_path( __FILE__ ) . 'options/global-options.php' );

Kirki::add_section( 'slider_section', array(
	'title'		 => esc_attr__( 'Slider Settings', 'front-page-builder' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
include_once( plugin_dir_path( __FILE__ ) . 'options/slider-options.php' );

Kirki::add_section( 'services_section', array(
	'title'		 => esc_attr__( 'Services Settings', 'front-page-builder' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
include_once( plugin_dir_path( __FILE__ ) . 'options/services-options.php' );

Kirki::add_section( 'blog_section', array(
	'title'		 => esc_attr__( 'Blog Settings', 'front-page-builder' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
include_once( plugin_dir_path( __FILE__ ) . 'options/blog-options.php' );

Kirki::add_section( 'testimonial_section', array(
	'title'		 => __( 'Testimonial Settings', 'front-page-builder' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
include_once( plugin_dir_path( __FILE__ ) . 'options/testimonial-options.php' );

Kirki::add_section( 'bg_image_section', array(
	'title'		 => esc_attr__( 'Background Image Settings', 'front-page-builder' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
include_once( plugin_dir_path( __FILE__ ) . 'options/bg-image-options.php' );

Kirki::add_section( 'custom_one_section', array(
	'title'		 => esc_attr__( 'Custom Section #1', 'front-page-builder' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
include_once( plugin_dir_path( __FILE__ ) . 'options/custom-one-options.php' );

Kirki::add_section( 'contact_section', array(
	'title'		 => esc_attr__( 'Contact Settings', 'front-page-builder' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
include_once( plugin_dir_path( __FILE__ ) . 'options/contact-options.php' );

Kirki::add_section( 'menu_section', array(
	'title'		 => esc_attr__( 'Header & Menu', 'front-page-builder' ),
	'panel'		 => 'homepage',
	'priority'	 => 10,
) );
include_once( plugin_dir_path( __FILE__ ) . 'options/menu-options.php' );

if ( !function_exists( 'fpb_default' ) ) :

	function fpb_default() {
		$default = array(
			'slider_menu_title'					 => 'Slider',
			'slider_section_button_color'		 => array(
				'color'	 => '#ffffff',
				'hover'	 => '#cecece',
			),
			'repeater_slider'					 => array(
				0	 => array(
					'home_slider_image'			 => FPB_SAMPLE_PLUGIN_URL . 'img/slider/slide1.jpg',
					'home_slider_title'			 => 'Slide One',
					'home_slider_desc'			 => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.',
					'home_slider_url'			 => '#',
					'home_slider_button_text'	 => 'Read more',
					'home_slider_position'		 => 'slider-center',
				),
				1	 => array(
					'home_slider_image'			 => FPB_SAMPLE_PLUGIN_URL . 'img/slider/slide2.jpg',
					'home_slider_title'			 => 'Slide two',
					'home_slider_desc'			 => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.',
					'home_slider_url'			 => '#',
					'home_slider_button_text'	 => 'Go!',
					'home_slider_position'		 => 'slider-center',
				),
			),
			'services_text_color'				 => array(
				'text'		 => '#000000',
				'hover'		 => '#ffffff',
				'bg'		 => '#ffffff',
				'bg-hover'	 => '#e61e65',
			),
			'repeater_services'					 => array(
				0	 => array(
					'services_icon'	 => 'fa fa-search',
					'services_title' => 'Service 1',
					'services_desc'	 => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem.',
					'services_url'	 => '#',
				),
				1	 => array(
					'services_icon'	 => 'fa fa-gear',
					'services_title' => 'Service 2',
					'services_desc'	 => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem.',
					'services_url'	 => '#',
				),
				2	 => array(
					'services_icon'	 => 'fa fa-text-height',
					'services_title' => 'Service 3',
					'services_desc'	 => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem.',
					'services_url'	 => '#',
				),
			),
			'blog_section_links_date'			 => array(
				'link'		 => '#dd9933',
				'linkhover'	 => '#666',
				'text'		 => '#212121',
			),
			'blog_section_button_color'			 => array(
				'color'	 => '#ffffff',
				'hover'	 => '#dd9933',
			),
			'testimonial_section_links'			 => array(
				'link'		 => '#fab000',
				'linkhover'	 => '#fab000',
			),
			'repeater_testimonial'				 => array(
				0	 => array(
					'testimonial_image'	 => FPB_SAMPLE_PLUGIN_URL . 'img/testimonials/face1.jpg',
					'testimonial_name'	 => 'Themes4WP.com',
					'testimonial_desc'	 => 'Themes4WP is specialized in developing fast and SEO optimized Free and Premium WordPress Themes which are suitable for dynamic News Websites, Online Magazines and WooCommerce websites.',
					'testimonial_url'	 => 'https://themes4wp.com/',
				),
				1	 => array(
					'testimonial_image'	 => FPB_SAMPLE_PLUGIN_URL . 'img/testimonials/face2.jpg',
					'testimonial_name'	 => 'WordPress.org',
					'testimonial_desc'	 => 'WordPress is web software you can use to create a beautiful website, blog, or app. We like to say that WordPress is both free and priceless at the same time.',
					'testimonial_url'	 => 'https://wordpress.org/',
				),
			),
			'bg_image_section_img'					 => array(
				'background-color'		 => '#0a0a0a',
				'background-image'		 => FPB_SAMPLE_PLUGIN_URL . 'img/bgimg/bgimg.jpg',
				'background-repeat'		 => 'no-repeat',
				'background-position'	 => 'center center',
				'background-size'		 => 'cover',
				'background-attachment'	 => 'scroll',
			),
			'bg_image_section_btn_color'		 => array(
				'link'	 => '#FFFFFF',
				'hover'	 => '#dd9933',
			),
			'custom_one_section_links'			 => array(
				'link'		 => '#fab000',
				'linkhover'	 => '#fab000',
			),
			'contact_section_links'				 => array(
				'link'		 => '#dd9933',
				'linkhover'	 => '#666',
			),
			'slider_layout'						 => 'container-fluid',
			'slider_spacing'					 => array(
				'top'	 => '0px',
				'bottom' => '0px',
			),
			'slider_bg_color'					 => '#0a0a0a',
			'slider_bg_overlay'					 => '',
			'slider_height'						 => '790',
			'slider_height_mobile'				 => '400',
			'slider_animation'					 => 'slide',
			'slider_start'						 => 'true',
			'slider_title_font'					 => array(
				'font-family'	 => 'Roboto Condensed',
				'font-size'		 => '35px',
				'variant'		 => 'regular',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#fcfcfc',
				'text-transform' => 'none',
				'font-backup'	 => '',
				'font-weight'	 => 400,
				'font-style'	 => 'normal',
			),
			'slider_description_font'			 => array(
				'font-family'	 => 'Roboto Condensed',
				'font-size'		 => '18px',
				'variant'		 => '300italic',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#fff',
				'text-transform' => 'none',
				'font-backup'	 => '',
				'font-weight'	 => 300,
				'font-style'	 => 'italic',
			),
			'slider_caption_color'				 => 'rgba(255,255,255,0)',
			'services_section_color'			 => '#ffffff',
			'services_section_title'			 => 'Services',
			'services_top_title_font'			 => array(
				'font-family'	 => 'Oswald',
				'font-size'		 => '60px',
				'variant'		 => '700',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#e2e2e2',
				'text-transform' => 'uppercase',
				'font-backup'	 => '',
				'font-weight'	 => 700,
				'font-style'	 => 'normal',
			),
			'services_top_description_font'		 => array(
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
			'services_section_desc'				 => 'Services description',
			'services_section_title_style'		 => 'title-style-layered',
			'services_description_margin'		 => array(
				'top' => '-58px',
			),
			'services_section_layout'			 => 'container',
			'services_section_bottom_border'	 => 'border-bottom-arrow',
			'services_layout'					 => 'services-layout2',
			'services_border'					 => '0px',
			'services_section_row'				 => 'col-md-4',
			'service_title_font'				 => array(
				'font-family'	 => 'Roboto Condensed',
				'font-size'		 => '28px',
				'variant'		 => '700',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#222',
				'text-transform' => 'none',
				'font-backup'	 => '',
				'font-weight'	 => 700,
				'font-style'	 => 'normal',
			),
			'service_description_font'			 => array(
				'font-family'	 => 'Roboto Condensed',
				'font-size'		 => '14px',
				'variant'		 => '300',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#222',
				'text-transform' => 'none',
				'font-backup'	 => '',
				'font-weight'	 => 300,
				'font-style'	 => 'normal',
			),
			'bg_image_section_menu_title'		 => 'BG Image',
			'bg_image_section_layout'					 => 'container-fluid',
			'bg_image_section_title_font'				 => array(
				'font-family'	 => 'Oswald',
				'font-size'		 => '55px',
				'variant'		 => '300',
				'line-height'	 => '1.1',
				'letter-spacing' => '0px',
				'color'			 => '#ffffff',
				'text-transform' => 'uppercase',
				'font-backup'	 => '',
				'font-weight'	 => 300,
				'font-style'	 => 'normal',
			),
			'bg_image_section_description_font'		 => array(
				'font-family'	 => 'Oswald',
				'font-size'		 => '18px',
				'variant'		 => '200',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#ffffff',
				'text-transform' => 'none',
				'font-backup'	 => '',
				'font-weight'	 => 200,
				'font-style'	 => 'normal',
			),
			'bg_image_section_title'					 => 'About Us',
			'bg_image_section_desc'					 => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Fusce nibh. Aliquam erat volutpat. Nullam sit amet magna in magna gravida vehicula. Vivamus porttitor turpis ac leo. Fusce wisi. Duis condimentum augue id magna semper rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Cras elementum. Nullam sit amet magna in magna gravida vehicula. Donec vitae arcu. Integer in sapien. Mauris suscipit, ligula sit amet pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus.',
			'testimonial_section_title'			 => 'Testimonials',
			'bg_image_section_main_bg_color'			 => 'rgba(0,0,0,0.21)',
			'bg_image_section_button'					 => 'Read More',
			'bg_image_section_button_url'				 => '#',
			'bg_image_section_position'			 => 'left',
			'testimonial_top_title_font'		 => array(
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
			'testimonial_section_desc'			 => 'Testimonial description',
			'testimonial_top_description_font'	 => array(
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
			'testimonial_section_color'			 => '#0a0a0a',
			'testimonial_section_title_style'	 => 'title-style-shadowed',
			'testimonial_section_bottom_border'	 => 'border-bottom-left',
			'testimonial_content_font'			 => array(
				'font-family'	 => 'Roboto Condensed',
				'font-size'		 => '17px',
				'variant'		 => '300',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#ffffff',
				'text-transform' => 'none',
				'font-backup'	 => '',
				'font-weight'	 => 300,
				'font-style'	 => 'normal',
			),
			'testimonial_name_font'				 => array(
				'font-family'	 => 'Roboto Condensed',
				'font-size'		 => '14px',
				'variant'		 => '300',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#ffffff',
				'text-transform' => 'none',
				'font-backup'	 => '',
				'font-weight'	 => 300,
				'font-style'	 => 'normal',
			),
			'testimonial_autostart'				 => 'true',
			'testimonial_interval'				 => '7500',
			'blog_section_color'				 => '#b68a8a',
			'blog_section_title'				 => 'News',
			'blog_section_desc'					 => 'From our Blog',
			'blog_top_description_font'			 => array(
				'font-family'	 => 'Oswald',
				'font-size'		 => '20px',
				'variant'		 => '300',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#000',
				'text-transform' => 'uppercase',
				'font-backup'	 => '',
				'font-weight'	 => 300,
				'font-style'	 => 'normal',
			),
			'blog_section_title_style'			 => 'title-style-layered',
			'blog_top_title_font'				 => array(
				'font-family'	 => 'Oswald',
				'font-size'		 => '60px',
				'variant'		 => '700',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#ffffff',
				'text-transform' => 'uppercase',
				'font-backup'	 => '',
				'font-weight'	 => 700,
				'font-style'	 => 'normal',
			),
			'blog_description_margin'			 => array(
				'top' => '-58px',
			),
			'blog_section_bottom_border'		 => 'border-bottom-arrow',
			'blog_section_menu_title'			 => 'Blog',
			'blog_section_style'				 => 'grid',
			'blog_section_number_posts'			 => '3',
			'blog_section_per_row'				 => '4',
			'blog_title_font'					 => array(
				'font-family'	 => 'Roboto Condensed',
				'font-size'		 => '35px',
				'variant'		 => '700',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#ffffff',
				'text-transform' => 'uppercase',
				'font-backup'	 => '',
				'font-weight'	 => 700,
				'font-style'	 => 'normal',
			),
			'blog_content_font'					 => array(
				'font-family'	 => 'Roboto Condensed',
				'font-size'		 => '16px',
				'variant'		 => '300',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#ffffff',
				'text-transform' => 'none',
				'font-backup'	 => '',
				'font-weight'	 => 300,
				'font-style'	 => 'normal',
			),
			'contact_section_title'				 => 'Contact Us',
			'contact_section_desc'				 => 'Our Contact Form',
			'contact_section_title_style'		 => 'title-style-shadowed',
			'contact_section_layout'			 => 'container',
			'contact_section_bottom_border'		 => 'border-bottom-none',
			'contact_section_menu_title'		 => 'Contact',
			'contact_form'						 => '1807',
			'contact_company_text'				 => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Fusce nibh. Aliquam erat volutpat. Nullam sit amet magna in magna gravida vehicula. Vivamus porttitor turpis ac leo. Fusce wisi. Duis condimentum augue id magna semper rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Cras elementum. Nullam sit amet magna in magna gravida vehicula. Donec vitae arcu. Integer in sapien. Mauris suscipit, ligula sit amet pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus.',
			'contact_section_font'				 => array(
				'font-family'	 => 'Oswald',
				'font-size'		 => '16px',
				'variant'		 => '300',
				'line-height'	 => '1.8',
				'letter-spacing' => '0px',
				'color'			 => '#222',
				'text-transform' => 'none',
				'font-backup'	 => '',
				'font-weight'	 => 300,
				'font-style'	 => 'normal',
			),
			'contact_section_color'				 => '#f9f9f9',
			'menu_section_enable'				 => true,
			'custom_one_section_color'			 => '#ffffff',
			'custom_one_section_title'			 => 'Custom Section Title',
			'home_layout'						 => array(
				0	 => 'slider',
				1	 => 'services_section',
				2	 => 'bg_image_section',
				3	 => 'testimonial_section',
				4	 => 'blog_section',
				5	 => 'contact_section',
			),
			'custom_one_section_desc'			 => 'Custom Section Description',
			'custom_one_section_menu_title'		 => 'Custom',
			'header_menu_font'					 => array(
				'font-family'	 => 'Roboto Condensed',
				'font-size'		 => '16px',
				'variant'		 => '300',
				'letter-spacing' => '0px',
				'color'			 => '#ffffff',
				'text-transform' => 'uppercase',
				'font-backup'	 => '',
				'font-weight'	 => 300,
				'font-style'	 => 'normal',
			),
			'force_home'						 => true,
			'services_section_menu_title'		 => 'Services',
			'testimonial_section_layout'		 => 'container-fluid',
			'testimonial_section_menu_title'	 => 'Testimonials',
			'header-logo'						 => '',
			'blog_section_layout'				 => 'container',
			'blog_section_button'				 => false,
			'blog_section_button_text'			 => 'View all posts',
			'google-map-enable'					 => false,
			'google-map-api'					 => '',
			'services_section_padding'			 => array(
				'top'	 => '50px',
				'bottom' => '50px',
				'left'	 => '0px',
				'right'	 => '0px',
			),
			'testimonial_description_margin'	 => array(
				'top' => '-50px',
			),
			'testimonial_section_padding'		 => array(
				'top'	 => '50px',
				'bottom' => '50px',
				'left'	 => '0px',
				'right'	 => '0px',
			),
			'blog_section_padding'				 => array(
				'top'	 => '50px',
				'bottom' => '50px',
				'left'	 => '0px',
				'right'	 => '0px',
			),
			'custom_one_top_title_font'			 => array(
				'font-family'	 => 'Roboto Condensed',
				'font-size'		 => '40px',
				'variant'		 => '400',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#000',
				'text-transform' => 'none',
			),
			'custom_one_top_description_font'	 => array(
				'font-family'	 => 'Roboto Condensed',
				'font-size'		 => '20px',
				'variant'		 => '300',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#000',
				'text-transform' => 'none',
			),
			'custom_one_section_title_style'	 => 'title-style-one',
			'custom_one_description_margin'		 => array(
				'top' => '-50px',
			),
			'custom_one_section_layout'			 => 'container',
			'custom_one_section_bottom_border'	 => 'border-bottom-none',
			'custom_one_section_padding'		 => array(
				'top'	 => '50px',
				'bottom' => '50px',
				'left'	 => '0px',
				'right'	 => '0px',
			),
			'contact_top_title_font'			 => array(
				'font-family'	 => 'Roboto Condensed',
				'font-size'		 => '40px',
				'variant'		 => '400',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#000',
				'text-transform' => 'none',
			),
			'contact_top_description_font'		 => array(
				'font-family'	 => 'Roboto Condensed',
				'font-size'		 => '20px',
				'variant'		 => '300',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#000',
				'text-transform' => 'none',
			),
			'contact_description_margin'		 => array(
				'top' => '-50px',
			),
			'contact_section_padding'			 => array(
				'top'	 => '50px',
				'bottom' => '50px',
				'left'	 => '0px',
				'right'	 => '0px',
			),
			'slider_interval'					 => 7000,
			'services_layout_icon_color'		 => '#e61e65',
			'custom_one_content_font'			 => array(
				'font-family'	 => 'Roboto Condensed',
				'font-size'		 => '17px',
				'variant'		 => '300',
				'line-height'	 => '1.6',
				'letter-spacing' => '0px',
				'color'			 => '#222',
				'text-transform' => 'none',
			),
			'custom_one_page'					 => '',
			'header_menu_title_font'			 => array(
				'font-family'	 => 'Roboto Condensed',
				'font-size'		 => '26px',
				'variant'		 => '400',
				'letter-spacing' => '0px',
				'color'			 => '#fff',
				'text-transform' => 'uppercase',
			),
		);
		if ( has_filter( 'fpb_default_options' ) ) {
			$default = apply_filters( 'fpb_default_options', $default );
		}
		return $default;
	}

endif;

