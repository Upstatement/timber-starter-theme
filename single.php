<?php

/**
 * The Template for displaying all single posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

namespace App;

use Timber\Timber;

$context = Timber::context();
$post = $context['post'];
$templates = array('templates/single-' . $post->post_type . '.twig', 'templates/single.twig');

if (post_password_required($post->ID)) {
	$templates = 'templates/single-password.twig';
} 

Timber::render($templates, $context);