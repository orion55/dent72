<?php
/*
Widget Name: Contact Information widget
Description: This widget is used to display a list of your social networks
Settings:
 Title - Widget's text title
 Add Contact Information - Click to add a new contact information
 Choose icon - Choose an icon for your social network
 Value - Describe your social network contact
*/

/**
 * @package Dentalcare
 */

if ( ! class_exists( 'Dentalcare_Contact_Information_Widget' ) ) {

	/**
	 * Class Dentalcare_Contact_Information_Widget.
	 */
	class Dentalcare_Contact_Information_Widget extends Cherry_Abstract_Widget {

		/**
		 * Constructor.
		 */
		public function __construct() {
			$this->widget_cssclass    = 'contact-information-widget';
			$this->widget_description = esc_html__( 'Display an contact-information.', 'dentalcare' );
			$this->widget_id          = 'dentalcare_contact_information_widget';
			$this->widget_name        = esc_html__( 'Contact Information', 'dentalcare' );

			$this->settings           = array(
				'title'  => array(
					'type'  => 'text',
					'value' => 'Contact Information',
					'label' => esc_html__( 'Title:', 'dentalcare' ),
				),
				'contact_information' => array(
					'type'         => 'repeater',
					'add_label'    => esc_html__( 'Add Contact Information', 'dentalcare' ),
					'title_field'  => 'value',
					'hidden_input' => true,
					'fields'       => array(
						'icon'  => array(
							'type'      => 'iconpicker',
							'id'        => 'icon',
							'name'      => 'icon',
							'label'     => esc_html__( 'Choose icon', 'dentalcare' ),
							'width'     => 'full',
							'icon_data' => dentalcare_get_nc_outline_icons_data(),
						),
						'value' => array(
							'type'        => 'textarea',
							'id'          => 'value',
							'name'        => 'value',
							'placeholder' => esc_html__( 'Value', 'dentalcare' ),
							'label'       => esc_html__( 'Value', 'dentalcare' ),
						),
					),
				),
			);

			add_action( 'cherry_widget_after_update', array( $this, 'register_string' ) );

			parent::__construct();
		}

		/**
		 * Widget function.
		 *
		 * @see   WP_Widget
		 * @since 1.0.1
		 * @param array $args
		 * @param array $instance
		 */
		public function widget( $args, $instance ) {

			if ( $this->get_cached_widget( $args ) ) {
				return;
			}

			$template = dentalcare_get_locate_template( 'inc/widgets/contact-information/views/contact-information-view.php' );

			if ( empty( $template ) ) {
				return;
			}

			ob_start();

			$this->setup_widget_data( $args, $instance );
			$this->widget_start( $args, $instance );

			echo '<ul class="contact-information-widget__inner">';

			if( ! empty( $instance['contact_information'] ) ){

				foreach ( $instance['contact_information'] as $key => $value ) {
					$icon           = ( $value['icon'] ) ? '<span class="icon nc-icon-outline ' . $value['icon'] . '"></span>' : '';
					$text           = apply_filters( 'wpml_translate_single_string', $value['value'], 'Widgets', "{$this->widget_name} - value {$key}" );
					$item_mod_class = ( $value['icon'] ) ? 'contact-information__item--icon' : '';

					include $template;
				}
			}

			echo '</ul>';

			$this->widget_end( $args );
			$this->reset_widget_data();

			echo $this->cache_widget( $args, ob_get_clean() );
		}

		/**
		 * Registers a text string for translation via WPML-plugin.
		 *
		 * @param array $instance
		 */
		public function register_string( $instance ) {

			if ( empty( $instance['contact_information'] ) ) {
				return;
			}

			foreach ( $instance['contact_information'] as $key => $value ) {
				do_action( 'wpml_register_single_string', 'Widgets', "{$this->widget_name} - value {$key}", $value['value'] );
			}
		}
	}
}

add_action( 'widgets_init', 'dentalcare_register_contact_information_widget' );
/**
 * Register contact information widget.
 */
function dentalcare_register_contact_information_widget() {
	register_widget( 'Dentalcare_Contact_Information_Widget' );
}
