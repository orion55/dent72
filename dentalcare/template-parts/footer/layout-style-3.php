<?php
/**
 * The template for displaying the style-3 footer layout.
 *
 * @package Dentalcare
 */
?>

<div <?php dentalcare_footer_container_class(); ?>>
	<div class="site-info container-wide">
		<div class="site-info-wrap">
			<div class="site-info-block"><?php
				dentalcare_footer_logo();
				dentalcare_footer_copyright();
			?></div>
			<?php dentalcare_footer_menu(); ?>
			<div class="site-info-block"><?php
				dentalcare_contact_block( 'footer' );
				dentalcare_social_list( 'footer' );
			?></div>
		</div>
	</div><!-- .site-info -->
</div><!-- .container -->
