<?php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$container = Yolo\createContainer(
    [
        'debug' => true,
    ],
    [
        new Yolo\DependencyInjection\MonologExtension(),
    ]
);

$app = new Yolo\Application($container);

$app->get('/', function (Request $request) {
    return new Response("OK, ca marche !\n");
});

$app->run(); // test