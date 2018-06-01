<?php
/**
 * Extends basic functionality for better TM Mega Menu compatibility
 *
 * @package Dentalcare
 */

/**
 * Check if Mega Menu plugin is activated.
 *
 * @return bool
 */
function dentalcare_is_mega_menu_active() {
	return class_exists( 'tm_mega_menu' );
}

add_filter( 'dentalcare_theme_script_variables', 'dentalcare_pass_mega_menu_vars' );

/**
 * Pass Mega Menu variables.
 *
 * @param  array  $vars Variables array.
 * @return array
 */
function dentalcare_pass_mega_menu_vars( $vars = array() ) {

	if ( ! dentalcare_is_mega_menu_active() ) {
		return $vars;
	}

	$vars['megaMenu'] = array(
		'isActive' => true,
		'location' => get_option( 'tm-mega-menu-location' ),
	);

	return $vars;
}
