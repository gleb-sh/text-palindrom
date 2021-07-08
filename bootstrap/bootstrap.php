<?php

// include application & routing classes

$app = new App\App;

$router = new App\Router;

// include our routes
require_once __DIR__.'/../router/web.php';