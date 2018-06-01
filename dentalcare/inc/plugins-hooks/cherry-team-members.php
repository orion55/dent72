<?php
/**
 * Cherry Team Members hooks.
 *
 * @package Dentalcare
 */

// Add `Cover image` meta field.
add_filter( 'cherry_team_members_meta_args', 'dentalcare_cherry_team_members_meta_args' );

// Add macros %%COVERIMAGE%% and callback function.
add_filter( 'cherry_team_data_callbacks', 'dentalcare_cherry_team_data_callbacks' );

// Modify heading format.
add_filter( 'cherry_team_shortcode_heading_format', 'dentalcare_modify_cherry_team_shortcode_heading_format' );

/**
 * Add `Cover image` meta field.
 *
 * @param array $args Meta args.
 *
 * @return array
 */
function dentalcare_cherry_team_members_meta_args( $args = array() ) {

	$new_args = array(
		'cherry-team-email' => array(
			'type'              => 'text',
			'placeholder'       => esc_html__( 'E-mail', 'dentalcare' ),
			'label'             => esc_html__( 'E-mail', 'dentalcare' ),
			'sanitize_callback' => 'sanitize_email'
		),
	);

	dentalcare_array_insert( $args['fields'], 3, $new_args );

	return $args;
}

/**
 * Add macros %%EMAIL%%, %%TITLE%%, %%ICON%% and callback function.
 *
 * @param array $data Item data.
 *
 * @return array
 */
function dentalcare_cherry_team_data_callbacks( $data = array() ) {

	$data['email']          = 'dentalcare_get_cherry_team_email';
	$data['icon']           = 'dentalcare_get_cherry_team_icon';
	$data['title_phone']    = 'dentalcare_get_cherry_team_title_phone';
	$data['title_location'] = 'dentalcare_get_cherry_team_title_location';
	$data['title_email']    = 'dentalcare_get_cherry_team_title_email';
	$data['content_title']  = 'dentalcare_get_cherry_team_content_title';

	return $data;
}

/**
 * Callback function for macros %%EMAIL%%.
 */
function dentalcare_get_cherry_team_email() {

	global $post;
	$email = get_post_meta( $post->ID, 'cherry-team-email', true );

	if ( ! $email ) {
		return '';
	}

	$format = apply_filters( 'dentalcare_cherry_team_email_format', '<span class="team-email"><a href="mailto:%1$s">%1$s</a></span>' );

	return sprintf( $format, $email );
}

/**
 * Callback function for macros %%ICON%%.
 */
function dentalcare_get_cherry_team_icon( $args = array() ) {

	if ( isset( $args['icon'] ) && false === $args['icon'] ) {
		return;
	}

	if ( isset( $args['for'] ) && false === $args['for'] ) {
		return;
	}

	global $post;
	$meta = $args['for'];
	$value = get_post_meta( $post->ID, 'cherry-team-' . $meta, true );

	if ( empty( $value ) ) {
		return;
	}

	$format = apply_filters( 'dentalcare_cherry_team_icon_format', '<span class="team-icon"><i class="%s"></i></span>' );

	return sprintf( $format, $args['icon'] );
}

/**
 * Callback function for macros %%TITLE_PHONE%%.
 */
function dentalcare_get_cherry_team_title_phone() {
	global $post;
	$value = get_post_meta( $post->ID, 'cherry-team-phone', true );

	if ( empty( $value ) ) {
		return;
	}

	$format = apply_filters( 'dentalcare_cherry_team_phone_title_format', '<span class="team-meta-title">%s</span>' );

	return sprintf( $format, esc_html__( 'Phone:', 'dentalcare' ) );
}

/**
 * Callback function for macros %%TITLE_LOCATION%%.
 */
function dentalcare_get_cherry_team_title_location() {
	global $post;
	$value = get_post_meta( $post->ID, 'cherry-team-location', true );

	if ( empty( $value ) ) {
		return;
	}

	$format = apply_filters( 'dentalcare_cherry_team_location_title_format', '<span class="team-meta-title">%s</span>' );

	return sprintf( $format, esc_html__( 'Address:', 'dentalcare' ) );
}

/**
 * Callback function for macros %%TITLE_PHONE%%.
 */
function dentalcare_get_cherry_team_title_email() {
	global $post;
	$value = get_post_meta( $post->ID, 'cherry-team-email', true );

	if ( empty( $value ) ) {
		return;
	}

	$format = apply_filters( 'dentalcare_cherry_team_email_title_format', '<span class="team-meta-title">%s</span>' );

	return sprintf( $format, esc_html__( 'E-mail:', 'dentalcare' ) );
}

/**
 * Callback function for macros %%CONTENT_TITLE%%.
 */
function dentalcare_get_cherry_team_content_title() {
	$format = '<h4>%s</h4>';

	return sprintf( $format, esc_html__( 'Profile', 'dentalcare' ) );
}

/**
 * Modify heading format.
 *
 * @param array $format Heading formats.
 *
 * @return array
 */
function dentalcare_modify_cherry_team_shortcode_heading_format( $format = array() ) {

	$format['super_title'] = '<h6 class="team-heading_super_title">%s</h6>';
	$format['subtitle']    = '<h5 class="team-heading_subtitle">%s</h5>';

	return $format;
}

/**
 * Array insert function.
 *
 * @return array
 */
function dentalcare_array_insert( &$array, $position, $insert_array ) {
	$first_array = array_splice( $array, 0, $position );
	$array = array_merge( $first_array, $insert_array, $array );
}
