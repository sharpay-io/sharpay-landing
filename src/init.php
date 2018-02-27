<?php

define('APPLICATION_PATH', __DIR__);

require_once APPLICATION_PATH . '/libs/php-i18n/i18n.class.php';

// for debuging in browser via php -S localhost:8080
if ( isset($_GET['lang']) ) {
  $lang = $_GET['lang'];
}
// for page generation script
elseif ( isset($argv[1]) ) {
  $lang = $argv[1];
}
else {
  $lang = 'en';
}

$i18n = new i18n( APPLICATION_PATH . '/i18n/{LANGUAGE}.ini', APPLICATION_PATH . '/i18n/cache/', $lang );
$i18n->init();

// used to provide version of css files to avoid caching them by browser when files changed
$timestamp = (new DateTime('now'))->format("YmdHis");
