<?php
/**
 * Template part for default header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dentalcare
 */

$header_contact_block_visibility = get_theme_mod('header_contact_block_visibility', dentalcare_theme()->customizer->get_default('header_contact_block_visibility'));
$header_btn_visibility = get_theme_mod('header_btn_visibility', dentalcare_theme()->customizer->get_default('header_btn_visibility'));
$search_visible = get_theme_mod('header_search', dentalcare_theme()->customizer->get_default('header_search'));
?>
<div class="header-container_wrap container">

    <?php if ($header_contact_block_visibility || $header_btn_visibility) : ?>
        <div class="header-row__flex header-components__contact-button header-components__grid-elements"><?php
            dentalcare_contact_block('header');
            dentalcare_header_btn();
            ?></div>
    <?php endif; ?>

    <div class="header-container__flex-wrap">
        <div class="header-container__flex">
            <div class="site-branding">
                <?php dentalcare_header_logo() ?>
            </div>

            <div class="header-nav-wrapper">
                123
            </div>
        </div>
    </div>
</div>
