<?php
// Load Composer autoload

use CloudTheme\Core\Theme;

require_once __DIR__ . '/vendor/autoload.php';


$theme = new Theme();
$theme->init();
