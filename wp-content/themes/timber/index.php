<?php
$timber = new Timber\Timber();
$context = initTimberTheme();

$timber::render('templates/index.twig', $context);
