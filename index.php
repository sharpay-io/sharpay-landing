<?php

define('APPLICATION_PATH', __DIR__);

require_once APPLICATION_PATH . '/library/php-i18n/i18n.class.php';

// for debuging in browser via php -S localhost:8080
if ( isset($_GET['lang']) ) {
  $locale = $_GET['lang'];
}
// for page generation script
elseif ( isset($argv[1]) ) {
  $locale = $argv[1];
}
else {
  $locale = 'en';
}

$i18n = new i18n( APPLICATION_PATH . '/i18n/{LANGUAGE}.ini', APPLICATION_PATH . '/i18n/cache/', 'en' );
$i18n->setForcedLang($locale);
$i18n->init();

?><?=L::test?>
