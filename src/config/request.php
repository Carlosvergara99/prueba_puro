<?php

namespace App\config;

class request
{
    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
    public function input($key, $default = null){
        return $this->data[$key] ?? $default;
    }

    public function all(){
        return $this->data;
    }
}