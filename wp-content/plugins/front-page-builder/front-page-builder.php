<?php
/*
  Plugin Name: Front Page Builder
  Description: Easily build beautiful home page. Easy to use with any theme.
  Version: 1.0.2
  Author: Themes4WP
  Author URI: https://themes4wp.com/
 */

if ( !function_exists( 'add_action' ) ) {
	die( 'Nothing to do...' );
}

define( 'FPB_SAMPLE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'FPB_SAMPLE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

if ( ! class_exists( 'Gamajo_Template_Loader' ) ) {
	require FPB_SAMPLE_PLUGIN_DIR . 'include/template-loader.php'; // Template loader
}
require FPB_SAMPLE_PLUGIN_DIR . 'include/fpb-template-loader.php'; // Init template loader

add_action( 'plugins_loaded', 'front_page_builder_load_textdomain' );

function front_page_builder_load_textdomain() {
	load_plugin_textdomain( 'front-page-builder', false, basename( dirname( __FILE__ ) ) . '/languages/' );
}

function front_page_builder_scripts() {
  if ( is_front_page() || is_page_template( 'front-page-builder-template.php' ) ) {
  	wp_enqueue_style( 'front-page-builder', FPB_SAMPLE_PLUGIN_URL . 'css/style.css', array('bootstrap'), '1.0' );
    wp_enqueue_style( 'bootstrap', FPB_SAMPLE_PLUGIN_URL . 'css/bootstrap.min.css', array(), '3.3.6', 'all' );
  	wp_enqueue_style( 'fpb-flexslider', FPB_SAMPLE_PLUGIN_URL . 'css/flexslider.css', array(), '2.6.3', 'all' );
  	wp_enqueue_style( 'animate', FPB_SAMPLE_PLUGIN_URL . 'css/animate.min.css', array(), '3.5.1', 'all' );
    wp_enqueue_style( 'font-awesome', FPB_SAMPLE_PLUGIN_URL . 'css/font-awesome.min.css', array(), '4.7.0', 'all' );
    wp_enqueue_script( 'bootstrap', FPB_SAMPLE_PLUGIN_URL . 'js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
  	wp_enqueue_script( 'front-page-builder', FPB_SAMPLE_PLUGIN_URL . 'js/customscript.js', array( 'jquery' ), '1.0', true );
  	wp_enqueue_script( 'fpb-flexslider', FPB_SAMPLE_PLUGIN_URL . 'js/jquery.flexslider-min.js', array( 'jquery' ), '2.6.3', true );
  }
}
add_action( 'wp_enqueue_scripts', 'front_page_builder_scripts' );


if ( !class_exists( 'Kirki' ) ) {
	include_once( FPB_SAMPLE_PLUGIN_DIR . 'include/framework/kirki.php' );
}


include_once( FPB_SAMPLE_PLUGIN_DIR . 'include/options.php' ); // Theme options.
include_once( FPB_SAMPLE_PLUGIN_DIR . 'template-builder.php' ); // Generate page template
include_once( FPB_SAMPLE_PLUGIN_DIR . 'include/backup.php' ); // Backup options

function fpb_get_option( $option_name = '' ){

      $defaults = fpb_default();
      
      $options = get_option($option_name, $defaults );

      //Parse defaults again
      $options = wp_parse_args( $options, $defaults );

      return $options;

}

function fpb_force_activate_template( $template ) {
  $options = fpb_get_option( 'front_page_builder_options' ); 
  $force_enable = $options['force_home'];
  if ( is_front_page() && $force_enable == 1 ) {

    $template = FPB_SAMPLE_PLUGIN_DIR . 'front-page-builder-template.php';
  }
  return $template;
}
add_filter('template_include','fpb_force_activate_template');
