<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dentalcare
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
    <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter49203064 = new Ya.Metrika2({ id:49203064, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/49203064" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>

<body <?php body_class(); ?>>
<?php dentalcare_get_page_preloader(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'dentalcare'); ?></a>
    <header id="masthead" <?php dentalcare_header_class(); ?> role="banner">
        <?php dentalcare_ads_header() ?>
        <?php dentalcare_get_template_part('template-parts/header/top-panel', get_theme_mod('header_layout_type', dentalcare_theme()->customizer->get_default('header_layout_type'))); ?>

        <div <?php dentalcare_header_container_class(); ?>>
            <?php dentalcare_get_template_part('template-parts/header/layout', get_theme_mod('header_layout_type', dentalcare_theme()->customizer->get_default('header_layout_type'))); ?>
        </div><!-- .header-container -->
    </header><!-- #masthead -->

    <div id="content" <?php dentalcare_content_class(); ?>>
