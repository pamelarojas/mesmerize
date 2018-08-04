<?php
/**
 * Contact Section
 */
Kirki::add_field( 'front_page_builder', array(
	'type'			 => 'switch',
	'settings'		 => 'google-map-enable',
	'label'			 => esc_attr__( 'Google Map', 'front-page-builder' ),
	'description'	 => esc_attr__( 'Enable google map', 'front-page-builder' ),
	'section'		 => 'contact_section',
	'default'		 => 0,
	'priority'		 => 10,
) );
Kirki::add_field( 'front_page_builder', array(
	'type'				 => 'text',
	'settings'			 => 'google-map-api',
	'label'				 => esc_attr__( 'Google map API key', 'front-page-builder' ),
	'description'		 => sprintf( __( 'Paste your API key. Get the API key %s.', 'front-page-builder' ), '<a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target="_blank">here</a>' ),
	'section'			 => 'contact_section',
	'default'			 => '',
	'priority'			 => 10,
	'active_callback'	 => array(
		array(
			'setting'	 => 'google-map-enable',
			'operator'	 => '==',
			'value'		 => 1,
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'typography',
	'settings'	 => 'contact_section_font',
	'transport'	 => 'auto',
	'label'		 => esc_attr__( 'Section Font', 'front-page-builder' ),
	'section'	 => 'contact_section',
	'transport'	 => 'auto',
	'default'	 => array(
		'font-family'	 => 'Oswald',
		'font-size'		 => '16px',
		'variant'		 => '300',
		'line-height'	 => '1.6',
		'letter-spacing' => '0px',
		'color'			 => '#222',
		'text-transform' => '',
	),
	'priority'	 => 10,
	'output'	 => array(
		array(
			'element' => '#contact_section',
		),
	),
) );
Kirki::add_field( 'front_page_builder', array(
	'type'		 => 'multicolor',
	'settings'	 => 'contact_section_links',
	'section'	 => 'contact_section',
	'priority'	 => 10,
	'choices'	 => array(
		'link'	 => esc_attr__( 'Links Color', 'front-page-builder' ),
    'linkhover'	 => esc_attr__( 'Links Hover Color', 'front-page-builder' ),
	),
	'default'	 => array(
		'link'	 => '#dd9933',
		'linkhover'	 => '#666',
	),
	'transport'	 => 'auto',
	'output'	 => array(
		array(
			'choice'	 => 'link',
			'element'	 => '#contact_section a',
			'property'	 => 'color',
		),
		array(
			'choice'	 => 'linkhover',
			'element'	 => '#contact_section  a:hover',
			'property'	 => 'color',
		),
	),
) );
if ( class_exists( 'WPCF7' ) ) {
	Kirki::add_field( 'front_page_builder', array(
		'type'			 => 'select',
		'settings'		 => 'contact_form',
		'label'			 => esc_attr__( 'Contact Form', 'front-page-builder' ),
		'description'	 => esc_attr__( 'Select form from Contact Form 7 plugin', 'front-page-builder' ),
		'section'		 => 'contact_section',
		'default'		 => '',
		'priority'		 => 10,
		'choices'		 => Kirki_Helper::get_posts( array( 'posts_per_page' => -1, 'post_type' => 'wpcf7_contact_form' ) ),
	) );
} else {
	Kirki::add_field( 'front_page_builder', array(
		'type'		 => 'custom',
		'settings'	 => 'contact_section_form_disable',
		'label'		 => sprintf( esc_attr__( 'Plugin %1$s is not installed and activated. Activate it to enable %1$s functions.', 'front-page-builder' ), 'Contact Form 7' ),
		'section'	 => 'contact_section',
		'priority'	 => 10,
	) );
}
Kirki::add_field( 'front_page_builder', array(
	'type'				 => 'editor',
	'settings'			 => 'contact_company_text',
	'label'				 => esc_attr__( 'About text', 'front-page-builder' ),
	'section'			 => 'contact_section',
	'sanitize_callback'	 => 'wp_kses_post',
	'default'			 => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Fusce nibh. Aliquam erat volutpat. Nullam sit amet magna in magna gravida vehicula. Vivamus porttitor turpis ac leo. Fusce wisi. Duis condimentum augue id magna semper rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Cras elementum. Nullam sit amet magna in magna gravida vehicula. Donec vitae arcu. Integer in sapien. Mauris suscipit, ligula sit amet pharetra semper, nibh ante cursus purus, vel sagittis velit mauris vel metus.',
	'priority'			 => 10,
) );
