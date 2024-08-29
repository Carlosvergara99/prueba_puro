<?php

namespace App\config;

use Illuminate\Database\Capsule\Manager as Capsule;

class database
{

    protected  array $config;

    function __construct()
    {
        $this->config = require base_path('/database/config.php');
        $this->getConnection();
    }

    function getConnection():void{
        $capsule = new Capsule;
        $capsule->addConnection($this->config['connections'][$this->config['default']]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}