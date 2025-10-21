<?php declare(strict_types=1);

use Flark\Frame;
use Hat\Tflark\Controllers\PeopleController;

require_once __DIR__ . '/../vendor/autoload.php';

$flarkEngine = Frame\Engine::getInstance();

$flarkEngine->setupRoutes(function (Frame\Router $router) {
    $router->add('/', 'GET', PeopleController::class, 'index');
});

$flarkEngine->start();
