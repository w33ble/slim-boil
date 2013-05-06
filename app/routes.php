<?php

// Debug; don't index yet...
$app->get('/robots.txt', function() use ($app) {
  $app->contentType('text/plain');
  echo "User-agent: *\nDisallow: /";
});

// Home
$app->get('/', function() use ($app) {
  $app->render('home/view.html', array(
    'pageName'  => "Home"
    ));
});

