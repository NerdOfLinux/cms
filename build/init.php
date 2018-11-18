<?php
// Load functions
$loaded_func_files = [];
require __DIR__ . '/functions/load.php';
loop_include( __DIR__ . '/functions' );

// Load composer
require $document_root . '/vendor/autoload.php';

// Load config
require __DIR__ . '/config_parse.php';

// Load other vars
require __DIR__ . '/vars.php';

// Begin page load
require __DIR__ . '/page_load.php';
?>
