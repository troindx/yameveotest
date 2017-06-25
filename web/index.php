<?php

require __DIR__.'/../vendor/autoload.php';


$app = new Silex\Application();

$app['debug'] = true;

require __DIR__.'/../config/config.php';
require __DIR__.'/../src/Infrastructure/Silex/services.php';
require __DIR__.'/../src/Infrastructure/Silex/routes.php';

$app->run();
