<?php

/**
 * The template for the 404 page
 */

namespace Timber\StarterTheme;

use Timber\Timber;

$context = Timber::context();
Timber::render('404.twig', $context);
