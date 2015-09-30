<?php

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;

$request = Request::createFromGlobals();

$app = new Application();

// TODO: Implement some logic

$app->run($request);
