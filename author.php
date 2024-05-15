<?php

/**
 * The template for displaying Author Archive pages
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 */

namespace App;

use Timber\Timber;

global $wp_query;

$title = false;
if (isset($wp_query->query_vars['author'])) {
	$author = Timber::get_user($wp_query->query_vars['author']);
	$title  = 'Author Archives: ' . $author->name();
}

$context = Timber::context([
	'title'  => $title,
	'posts'  => Timber::get_posts(),
	'author' => $author,
]);

Timber::render(array('author.twig', 'archive.twig'), $context);
