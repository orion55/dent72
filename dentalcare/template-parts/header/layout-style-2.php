<?php
/**
 * Template part for style-2 header layout.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dentalcare
 */

$search_visible        = get_theme_mod( 'header_search', dentalcare_theme()->customizer->get_default( 'header_search' ) );
?>
<div class="header-container_wrap container">

	<div class="header-row__flex">
		<div class="site-branding">
			<?php dentalcare_header_logo() ?>
			<?php dentalcare_site_description(); ?>
		</div>

		<div class="header-row__flex header-components__contact-button"><?php
			dentalcare_contact_block( 'header' );
			dentalcare_header_btn();
		?></div>
	</div>

	<div class="header-nav-wrapper">
		<?php dentalcare_main_menu(); ?>

		<?php if ( $search_visible ) : ?>
			<div class="header-components header-components__search-cart"><?php
				dentalcare_header_search_toggle();
			?></div>
		<?php endif; ?>

		<?php dentalcare_header_search( '<div class="header-search">%s<span class="search-form__close"></span></div>' ); ?>
	</div>

</div>
