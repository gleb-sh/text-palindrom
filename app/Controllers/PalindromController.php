<?php

namespace App\Controllers;

use App\Services\PalindromService;

class PalindromController
{
    use \App\Traits\JsonTrait;

    public function check()
    {
        $data = $this->parseJson();

        $string = $data['string'];

        try {

            $Service = new PalindromService($string);

            if (count($Service->resultList) < 1) throw new \Exception("Ни один палиндром не найден");

            $this->answer['data'] = [
                'list'  => $Service->resultList,
                'count' => count($Service->resultList),
            ];

            $this->answer['status'] = 1;

        } catch (\Throwable $th) {
            $this->answer['data'] = [
                'error' => $th->getMessage(),
            ];
        }

        
        $this->answerJson();
    }
}