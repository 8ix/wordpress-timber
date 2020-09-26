<?php
$context = $timber::context();
$context['posts'] = $timber::get_posts();

$timber::render('templates/index.twig', $context);
