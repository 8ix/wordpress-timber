<?php

//Add Options Page into WordPress 
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}


// Load the theme stylesheets
function theme_styles()
{
    // Load all of the styles that need to appear on all pages
    wp_enqueue_style('main', get_template_directory_uri() . '/dist/theme.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');
