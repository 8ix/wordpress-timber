<?php
$timber = new Timber\Timber();

//Disable Core Services
include_once 'theme-settings/disable-wp-features.php';

//Enable Core Services
include_once 'theme-settings/enable-wp-features.php';


/* Init Timber - Used for Twig Scaffolding of pages see views directory */

function add_to_context($context)
{
    $context['header'] = [
        'menu' => new Timber\Menu('navigation')
    ];
    $context['footer'] = [
        'menu' => new Timber\Menu('footer'),
        'date' => date('Y')
    ];

    return $context;
}

add_filter('timber/context', 'add_to_context');
