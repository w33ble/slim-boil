<?php

require 'vendor/autoload.php';

define('ROOT_DIR', dirname(__FILE__));
define('APP_DIR', ROOT_DIR . '/app');

$app = new \Slim\Slim(array(
  'mode'            => 'development',
  'templates.path'  => 'app/views',
  'view'            => new \Slim\Extras\Views\Twig()
  ));

require_once('app/config/core.php');
require_once('app/routes.php');

$app->run();