<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @link https://github.com/timber/starter-theme
 */

namespace App;

use Timber\Timber;

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/StarterSite.php';

Timber::init();

// Sets the directories (inside your theme) to find .twig files.
Timber::$dirname = ['templates', 'views'];

new StarterSite();
