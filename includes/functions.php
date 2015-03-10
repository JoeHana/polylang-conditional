<?php

/**
 * Conditional Tag to check against a defined language
 *
 * @since 0.1.0
 *
 * @var $language
 */

function is_language( $language ) {
	
	$current_language = pll_current_language( 'slug' );
	
	if( $language == $current_language )
		return $language;
	
	return false;
	
}