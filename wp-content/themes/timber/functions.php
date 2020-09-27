<?php

//Disable Core Services
include_once 'theme-settings/disable-wp-features.php';

//Enable Core Services
include_once 'theme-settings/enable-wp-features.php';


/* Init Timber - Used for Twig Scaffolding of pages see views directory */
function initTimberTheme()
{
    $timber = new Timber\Timber();
    $context = $timber::context();
    $context['header'] = [
        'menu' => new Timber\Menu('navigation')
    ];
    $context['footer'] = [
        'menu' => new Timber\Menu('footer')
    ];

    return $context;
}
