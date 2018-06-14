<?php

// Fallback for Plugin Better Font Awesome (Use Local CSS insted of CDN)

function bfa_callback( $force_fallback ) {
    $force_fallback = true;
    return $force_fallback;
}
add_filter( 'bfa_force_fallback', 'bfa_callback' );

/**
* Function to defer all scripts which are not excluded
*/
function js_defer_attr($tag) {
	if (is_admin()) {
		return $tag;
	}
	// Do not add defer attribute to these scripts
	$scripts_to_exclude = array('jquery.js'); // add a string of js file e.g. script.js

	foreach($scripts_to_exclude as $exclude_script) {
		if (true == strpos($tag, $exclude_script ) )
			return $tag; 
	}
	// Defer all remaining scripts not excluded above
	return str_replace( ' src', ' defer src', $tag );
}
add_filter( 'script_loader_tag', 'js_defer_attr', 10);