<?php

/**
 *
 * Plugin Name: 			Polylang Conditional
 * Plugin URI: 				http://joehana.com
 *
 * Description: 			Provides a Function and a Shortcode to check against the current active language.
 * Version: 				0.1.0
 *
 * Author:					Joe Hana
 * Author URI: 				http://joehana.com
 * Author Email: 			me@joehana.com
 *
 * Text Domain: 			polylang-conditional
 * Domain Path: 			/polylang-conditional/lang
 *
 * Github Plugin URI:		joehana/polylang-conditional
 *
 */

// check if Polylang is active
if( !class_exists( 'Polylang' ) )
	return;

class Polylang_Conditionals {

    private static $_instance;

    /**
     * Instantiate Class
     */
    public static function instance() {
		
        if( !self::$_instance )
            self::$_instance = new self();
			
        return self::$_instance;
		
    }

    /**
     * Initializes the plugin.
     */
    private function __construct() {
		
		// include functions
		@include( plugin_dir_path( __FILE__ ) . 'includes/functions.php' );
		
		// include shortcode
		@include( plugin_dir_path( __FILE__ ) . 'includes/shortcode.php' );
			
		// Internationalize the text strings used.
		add_action( 'plugins_loaded', array( $this, 'i18n' ), 2 );
		
    }



    /**
     * Load textdomain for internationalization
     */
	public function i18n() {

		load_plugin_textdomain( 'polylang-conditionals', false, dirname( plugin_basename( __FILE__ ) ) . '/lang' );

    }
	
}




/**
 * Call class
 *
 * @since 1.0.0
 */
 
Polylang_Conditionals::instance();