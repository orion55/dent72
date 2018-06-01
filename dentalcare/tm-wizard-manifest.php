<?php
/**
 * TM-Wizard configuration.
 *
 * @var array
 *
 * @package Dentalcare
 */

$plugins = array(
	'cherry-data-importer' => array(
		'name'   => esc_html__( 'Cherry Data Importer', 'dentalcare' ),
		'source' => 'remote', // 'local', 'remote', 'wordpress' (default).
		'path'   => 'https://github.com/CherryFramework/cherry-data-importer/archive/master.zip',
		'access' => 'skins',
	),
	'cherry-projects' => array(
		'name'   => esc_html__( 'Cherry Projects', 'dentalcare' ),
		'access' => 'skins',
	),
	'cherry-popups' => array(
		'name'   => esc_html__( 'Cherry PopUps', 'dentalcare' ),
		'access' => 'skins',
	),
	'cherry-team-members' => array(
		'name'   => esc_html__( 'Cherry Team Members', 'dentalcare' ),
		'access' => 'skins',
	),
	'cherry-testi' => array(
		'name'   => esc_html__( 'Cherry Testimonials', 'dentalcare' ),
		'access' => 'skins',
	),
	'cherry-services-list' => array(
		'name'   => esc_html__( 'Cherry Services List', 'dentalcare' ),
		'access' => 'skins',
	),
	'cherry-sidebars' => array(
		'name'   => esc_html__( 'Cherry Sidebars', 'dentalcare' ),
		'access' => 'skins',
	),
	'cherry-socialize' => array(
		'name'   => esc_html__( 'Cherry Socialize', 'dentalcare' ),
		'access' => 'skins',
	),
	'cherry-trending-posts' => array(
		'name'   => esc_html__( 'Cherry Trending Posts', 'dentalcare' ),
		'access' => 'skins',
	),
	'booked' => array(
		'name'   => esc_html__( 'Booked Appointments', 'dentalcare' ),
		'source' => 'local',
		'path'   => DENTALCARE_THEME_DIR . '/assets/includes/plugins/booked.zip',
		'access' => 'skins',
	),
	'elementor' => array(
		'name'   => esc_html__( 'Elementor Page Builder', 'dentalcare' ),
		'access' => 'skins',
	),
	'jet-elements' => array(
		'name'   => esc_html__( 'Jet Elements addon For Elementor', 'dentalcare' ),
		'source' => 'local',
		'path'   => DENTALCARE_THEME_DIR . '/assets/includes/plugins/jet-elements.zip',
		'access' => 'skins',
	),
	'tm-mega-menu' => array(
		'name'   => esc_html__( 'TM Mega Menu', 'dentalcare' ),
		'source' => 'remote',
		'path'   => 'http://cloud.cherryframework.com/downloads/free-plugins/tm-mega-menu.zip',
		'access' => 'skins',
	),
	'tm-photo-gallery' => array(
		'name'   => esc_html__( 'TM Photo Gallery', 'dentalcare' ),
		'access' => 'skins',
	),
	'tm-timeline' => array(
		'name'   => esc_html__( 'TM Timeline', 'dentalcare' ),
		'access' => 'skins',
	),
	'contact-form-7' => array(
		'name'   => esc_html__( 'Contact Form 7', 'dentalcare' ),
		'access' => 'skins',
	),
	'simple-file-downloader' => array(
		'name'   => esc_html__( 'Simple File Downloader', 'dentalcare' ),
		'access' => 'skins',
	),
	'shortcode-widget' => array(
		'name'   => esc_html__( 'Shortcode Widget', 'dentalcare' ),
		'access' => 'skins',
	),
	'wordpress-social-login' => array(
		'name'   => esc_html__( 'WordPress Social Login', 'dentalcare' ),
		'access' => 'skins',
	),
);

/**
 * Skins configuration.
 *
 * @var array
 */
$skins = array(
	'base' => array(
		'cherry-data-importer',
	),
	'advanced' => array(
		'default' => array(
			'full'  => array(
				'booked',
				'cherry-projects',
				'cherry-popups',
				'cherry-services-list',
				'cherry-sidebars',
				'cherry-socialize',
				'cherry-team-members',
				'cherry-testi',
				'cherry-trending-posts',
				'elementor',
				'jet-elements',
				'tm-mega-menu',
				'tm-photo-gallery',
				'tm-timeline',
				'contact-form-7',
				'simple-file-downloader',
				'shortcode-widget',
				'wordpress-social-login',
			),
			'lite'  => false,
			'demo'  => 'http://ld-wp.template-help.com/wordpress_65156',
			'thumb' => get_template_directory_uri() . '/assets/demo-content/default/default-thumb.png',
			'name'  => esc_html__( 'Dentalcare', 'dentalcare' ),
		),
	),
);

$texts = array(
	'theme-name' => esc_html__( 'Dentalcare', 'dentalcare' ),
);
