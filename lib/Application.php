<?php

namespace App;

class Application extends \RestApi\Application
{
    public function start()
    {
        $this->addMiddleware(\RestApi\Middleware\Database::class,[
            'dsn' => 'localhost:13306'
        ],'db');
        return parent::start();
    }
}