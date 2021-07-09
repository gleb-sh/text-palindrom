<?php

use App\Controllers\SiteController;
use App\Controllers\PalindromController;

$router->get('/',[SiteController::class,'index']);

$router->post('palindrom',[PalindromController::class,'check']);
