<?php

namespace App\Controllers;

class SiteController
{
    use \App\Traits\ViewTrait;

    public function index()
    {

        $this->view('home');
    }
}