<?php

/**
 * Shortcode: 	Is Language
 * Description:	Conditional to check active language
 *
 * Type:		Self-closing
 * Version:		0.2.0
 *
 * Tag:			[is_language][/is_language]
 *
 * Parameter:	Parameter are described below
 *
 */

class Polylang_Conditional_Shortcode {

	static function init() {
		
		if( !shortcode_exists( 'is_language' ) )
			add_shortcode( 'is_language', array( __CLASS__, 'shortcode' ) );
		
	}

	static function shortcode( $atts, $content ) {

		extract( shortcode_atts( array(
			'lang'		=> '',	// unique ID to identify the element
		), $atts ) );
			
		if( is_language( $lang ) )
			return do_shortcode( $content );

	}
	
}

Polylang_Conditional_Shortcode::init();