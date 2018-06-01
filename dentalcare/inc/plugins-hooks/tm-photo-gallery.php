<?php
/**
 * Tm-photo-gallery hooks.
 *
 * @package Dentalcare
 */

// Customization tm-photo-gallery plugin.
add_filter( 'theme_mod_sidebar_position', 'dentalcare_gallery_single_sidebar_position' );

add_filter( 'theme_mod_content_container_type', 'dentalcare_gallery_single_content_fullwidth' );

/**
 * Disable sidebar to single gallery albums & sets.
 */
function dentalcare_gallery_single_sidebar_position( $value ) {

	if ( is_singular( 'tm_pg_album' ) || is_singular('tm_pg_set') ) {
		return 'fullwidth';
	}

	return $value;
}

/**
 * Fullwidth single gallery albums & sets.
 */
function dentalcare_gallery_single_content_fullwidth( $value ) {

	if ( is_singular( 'tm_pg_album' ) || is_singular('tm_pg_set') ) {
		return 'fullwidth';
	}

	return $value;
}
