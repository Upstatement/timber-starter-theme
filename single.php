<?php

/**
 * The Template for displaying all single posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

namespace Timber\StarterTheme;

use Timber\Timber;

$post    = Timber::get_post();
$context = Timber::context(
	[
		'post' => $post,
	]
);

if (post_password_required($post->ID)) {
	Timber::render('single-password.twig', $context);
} else {
	Timber::render(array('single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single-' . $post->slug . '.twig', 'single.twig'), $context);
}
