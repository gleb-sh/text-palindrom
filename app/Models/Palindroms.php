<?php

namespace app\Models;

class Palindrom
{
    public string $defaultString;
    public array $resultList;

    public function __construct(string $defaultString)
    {
        $this->defaultString = $defaultString;
        $this->checkPalindroms();
    }

    public function checkPalindroms() : void
    {}

    private function explodeString(string $string) : array
    {}
}