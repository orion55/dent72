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
                <span class="logo-desc">Стоматологическая клиника</span>
            </div>
            <div class="header-nav-wrapper">
                <?php $address = carbon_get_theme_option('crb_address');
                if (!empty($address)): ?>
                    <div class="address__text">
                        <i class="fa fa-home fa-2x menu-icon" aria-hidden="true"></i>
                        <span class="address__desc"><?php echo $address; ?></span>
                    </div>
                <?php endif; ?>
                <div class="phone phone--one">
                    <?php $phone1 = carbon_get_theme_option('crb_phone1');
                    $phone_href = '+73452673075';
                    $phone_text = '+7 (3452) 67-30-75';
                    if (!empty($phone1)): $phone_href = preg_replace("/[^0-9+]+/i", "", $phone1);
                        $phone_text = $phone1;
                    endif; ?>
                    <i class="fa fa-phone fa-2x menu-icon" aria-hidden="true"></i><a
                            href="tel:<?php echo $phone_href ?>"
                            class="phone-number"><?php echo $phone_text ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
