<?php

/**
 * Search results page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

use Timber\Timber;

$templates = array('search.twig', 'archive.twig', 'index.twig');

$context = Timber::context([
   'title' => 'Search results for ' . get_search_query(),
   'posts' => Timber::get_posts(),
]);

Timber::render($templates, $context);
