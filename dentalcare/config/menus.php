<?php
/**
 * Menus configuration.
 *
 * @package Dentalcare
 */

add_action( 'after_setup_theme', 'dentalcare_register_menus', 5 );
/**
 * Register menus.
 */
function dentalcare_register_menus() {

	register_nav_menus( array(
		'top'          => esc_html__( 'Top', 'dentalcare' ),
		'main'         => esc_html__( 'Main', 'dentalcare' ),
		'main_landing' => esc_html__( 'Landing Main', 'dentalcare' ),
		'footer'       => esc_html__( 'Footer', 'dentalcare' ),
		'social'       => esc_html__( 'Social', 'dentalcare' ),
	) );
}
