<?php
/**
 * Template part for top panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dentalcare
 */

// Don't show top panel if all elements are disabled.
if ( ! dentalcare_is_top_panel_visible() ) {
	return;
}
?>

<div <?php echo dentalcare_get_html_attr_class( array( 'top-panel' ), 'top_panel_bg' ); ?>>
	<div class="container">
		<div class="top-panel__container">
			<?php dentalcare_top_message( '<div class="top-panel__message">%s</div>' ); ?>
			<?php dentalcare_contact_block( 'header_top_panel' ); ?>

			<div class="top-panel__wrap-items">
				<div class="top-panel__menus">
					<?php dentalcare_top_menu(); ?>
					<?php dentalcare_login_link(); ?>
					<?php dentalcare_social_list( 'header' ); ?>
				</div>
			</div>
		</div>
	</div>
</div><!-- .top-panel -->
