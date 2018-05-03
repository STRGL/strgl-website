<?php
$context = Timber::get_context();

$post = new TimberPost();
$context['post'] = $post;

Timber::render('templates/pages/home.twig', $context);