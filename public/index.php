<?php

require __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/../bootstrap/bootstrap.php';

$app->route($_SERVER['REQUEST_URI'],$router);