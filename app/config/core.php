<?php

$app->configureMode('production', function () use ($app) {
  $app->config(array(
    'log.enable' => true,
    'debug' => false
  ));
});

$app->configureMode('development', function () use ($app) {
  $app->config(array(
    'log.enable' => false,
    'debug' => true
  ));
});

include_once 'site.php';