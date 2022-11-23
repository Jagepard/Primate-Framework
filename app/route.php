<?php

use Primate\Router\Router;

$primate    = require_once "services.php";
$requestUri = explode('/', trim(parse_url($_SERVER["REQUEST_URI"])["path"], '/'));
$router     = $primate->get(Router::class);

$router->addRoute("/", function () {
    echo "Closure";
});

$router->matchRoute($requestUri);