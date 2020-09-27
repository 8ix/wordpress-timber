<?php

//Add Options Page into WordPress 
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

function wpb_menus()
{
    register_nav_menu('navigation', __('Navigation'));
    register_nav_menu('footer', __('Footer Navigation'));
}
add_action('init', 'wpb_menus');


// Load the theme stylesheets
function theme_styles()
{
    // Load all of the styles that need to appear on all pages
    wp_enqueue_style('main', get_template_directory_uri() . '/dist/theme.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');
