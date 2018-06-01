<?php
/**
 * Template part for style-6 header layout.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dentalcare
 */

$header_contact_block_visibility = get_theme_mod( 'header_contact_block_visibility', dentalcare_theme()->customizer->get_default( 'header_contact_block_visibility' ) );
$header_btn_visibility           = get_theme_mod( 'header_btn_visibility', dentalcare_theme()->customizer->get_default( 'header_btn_visibility' ) );
$search_visible                  = get_theme_mod( 'header_search', dentalcare_theme()->customizer->get_default( 'header_search' ) );
?>
<div class="header-container_wrap container">
	<?php if ( $header_contact_block_visibility || $header_btn_visibility ) : ?>
		<div class="header-row__flex header-components__contact-button header-components__grid-elements"><?php
			dentalcare_contact_block( 'header' );
			dentalcare_header_btn();
		?></div>
	<?php endif; ?>

	<div class="header-container__flex-wrap">
		<div class="row row-sm-center">
			<div class="col-xs-12 col-sm-6 col-sm-push-3 col-lg-4 col-lg-push-4">
				<div class="site-branding">
					<?php dentalcare_header_logo() ?>
					<?php dentalcare_site_description(); ?>
				</div>
			</div>

			<?php if ( $search_visible ) : ?>
				<div class="col-xs-12 col-sm-3 col-lg-4 col-sm-push-3 col-lg-push-4">
					<div class="header-components header-components__search-cart"><?php
						dentalcare_header_search_toggle();
					?></div>
				</div>
			<?php endif; ?>

		</div>
		<?php dentalcare_main_menu(); ?>
		<?php dentalcare_header_search( '<div class="header-search">%s<span class="search-form__close"></span></div>' ); ?>
	</div>
</div>
