<?php

namespace app\Traits;

trait JsonTrait
{
    public array $answer = [
        'status' = 0,
        'data' = [],
    ];

    public function answerJson(array $data = null)
    {
        if ($data) $this->answer['data'] = $data;
        
        echo json_encode($this->answer);
    }

}