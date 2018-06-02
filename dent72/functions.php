<?php
add_action('wp_enqueue_scripts', 'theme_name_scripts');

function theme_name_scripts()
{
    wp_enqueue_style('dent72-style', get_stylesheet_directory_uri() . '/data/css/main.min.css', array(), '', 'all');
}

require_once(get_stylesheet_directory() . '/include/admin-panel.php');

apply_filters('cherry5-is__open-button', '__return_false');
