<?php
/**
 * The template for displaying the style-2 footer layout.
 *
 * @package Dentalcare
 */
?>

<div <?php dentalcare_footer_container_class(); ?>>
	<div class="site-info container"><?php
		dentalcare_footer_logo();
		dentalcare_footer_menu();
		dentalcare_contact_block( 'footer' );
		dentalcare_social_list( 'footer' );
		dentalcare_footer_copyright();
	?></div><!-- .site-info -->
</div><!-- .container -->
