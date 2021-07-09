<?php

namespace App\Services;

class PalindromService
{
    public string $defaultString;
    public array $resultList;

    public function __construct(string $defaultString)
    {
        $this->defaultString = $defaultString;
        $this->checkPalindroms();
    }

    public function checkPalindroms() : void
    {
        $array = $this->explodeString($this->defaultString);

        $this->resultList = array_filter(
            array_map(function($item){

                $toupper = \mb_strtoupper($item);
                
                if ( $toupper == $this->mb_strrev($toupper)) return $item;

            },$array)
        );
    }

    private function mb_strrev(string $string) : string
    {
        $r = '';
        for ($i = mb_strlen($string); $i>=0; $i--) {
            $r .= mb_substr($string, $i, 1);
        }
        return $r;
    }

    private function explodeString(string $string) : array
    {
        preg_match_all('/[^\W\d][\w]*/u', $string, $mathes);

        return $mathes[0];
    }
}