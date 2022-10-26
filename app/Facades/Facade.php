<?php

namespace App\Facades;

use App\Exceptions\MethodNotFound;

abstract class Facade
{


    protected  static  $service;

    public static function __callStatic(string $name, $arguments)
    {
        static::initInstance();

        if (!method_exists(self::$service, $name))
            throw new MethodNotFound("Error Processing Request");
        return call_user_func_array([self::$service, $name], $arguments);
    }

    abstract public static function initInstance();
}
