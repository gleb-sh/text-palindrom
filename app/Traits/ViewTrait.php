<?php

namespace App\Traits;

trait ViewTrait
{
    public function view(string $view, array $vars = null)
    {
        extract($vars);
        
        require_once __DIR__.'/../../resources/views/' . $view . '.php';
    }
}