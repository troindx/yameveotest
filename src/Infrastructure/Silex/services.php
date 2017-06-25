<?php

use Application\UseCase\FriendsUseCase;
use Infrastructure\Persistence\File\FileFriendRepository;
use Infrastructure\Persistence\File\JsonFile;
use Infrastructure\Silex\Controller\FriendController;

$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app->register(new \Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/../../../log/dev.log'
));

$app['friend.repository'] = function () {
    return new FileFriendRepository(new JsonFile(__DIR__ . '/../../../data/friends.json'));
};

$app['friends.use_case'] = function($app) {
    return new FriendsUseCase($app['friend.repository']);
};

$app['friend.controller'] = function($app) {
    return new FriendController($app['friends.use_case'], $app['monolog']);
};