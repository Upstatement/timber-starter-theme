<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

use Timber\Timber;

$posts     = Timber::get_posts();
$templates = array('index.twig');

if (is_home()) {
	array_unshift($templates, 'front-page.twig', 'home.twig');
}

$context = Timber::context([
	'posts' => $posts,
	'foo'   => 'bar',
]);

Timber::render($templates, $context);
