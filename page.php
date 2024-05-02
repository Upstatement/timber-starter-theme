<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 */

namespace Timber\StarterTheme;

use Timber\Timber;

$post = Timber::get_post();

$context = Timber::context(
   [
      'post' => $post,
   ]
);

Timber::render(array('page-' . $timber_post->post_name . '.twig', 'page.twig'), $context);
