<?php
/* Init Timber - Used for Twig Scaffolding of pages see views directory */
$timber = new Timber\Timber();

//Disable Core Services
include_once 'theme-settings/disable-wp-features.php';

//Enable Core Services
include_once 'theme-settings/enable-wp-features.php';
