<?php
    /*
    Plugin Name: LF Hiker
    Plugin URI: http://elisabeth.pointal.org/lf-hiker
    Description: A responsive and mobile friendly plugin to display gpx track with profile elevation.
    Author: epointal
    Author URI: http://elisabeth.pointal.org/
    Version: 1.11.0
    License: GPL2
    Text domain: lfh
    */

if ( ! defined( 'ABSPATH' ) ) exit;
if( ! function_exists( "boolval")){
    function boolval( $var ){
        if( is_null( $var )){
            return false;
        }
        switch( gettype( $var)){
            case "boolean":
                return $var;
                break;
            case "integer":
            case "double":
                if($var >0){
                    return true;
                }else{
                    return false;
                }
                break;
            case "string":
                if( $var === "" || $var === "0" || $var === "false"){
                    return false;
                }else{
                    return true;
                }
                break;
            case "array":
                if( count($var)>0){
                    return true;
                }else{
                    return false;
                }
                break;
            default:
                return true;
        }
    }
}

class Lf_Hiker_Plugin
{
    const VERSION = '1.11.0';
    const LEAFLET_VERSION = '1.3.1';
    
    private static $_controller;
    
    public static $url = '';
    public static $path = '';
    
    
    private  function __construct()
    {
        add_action( 'plugins_loaded',array(&$this, 'initialize'));
        spl_autoload_register( 'Lf_Hiker_Plugin::autoloader' );
        register_activation_hook( __FILE__ , array('Lfh_Controller_Admin', 'activate'));
        register_deactivation_hook( __FILE__ , array( 'Lfh_Controller_Admin', 'deactivate') );
        register_uninstall_hook( __FILE__ , array( 'Lfh_Controller_Admin', 'uninstall') );
    }
    
    public function initialize()
    {
      self::$url = plugin_dir_url( __FILE__ );
      self::$path =  plugin_dir_path( __FILE__ );
      add_action( 'init', array(&$this, 'load_textdomain') );
      if(is_admin()){
          self::$_controller = Lfh_Controller_Back::get_instance();
      }else{
          self::$_controller = Lfh_Controller_Front::get_instance();
      }
    }
    public static function autoloader( $class_name ) 
    { 
          if( false !== strpos($class_name, 'Lfh_') ){
              $classes_dir = realpath( plugin_dir_path( __FILE__ ) ) . DIRECTORY_SEPARATOR ;
              $class_name = str_replace('Lfh_' , '', $class_name);
              $class_file = str_replace( '_', DIRECTORY_SEPARATOR, $class_name ) . '.php';
              require_once $classes_dir . $class_file;
          }
    }
    public static function get_controller()
    {
      if(is_null(self::$_controller)) {
          self::$_controller = new Lf_Hiker_Plugin();
      }
      return self::$_controller;
    }
    
    public  function load_textdomain()
    {
        load_plugin_textdomain( 'lfh', false, basename( dirname( __FILE__ ) ) . '/languages' );
    }

} 

Lf_Hiker_Plugin::get_controller();


