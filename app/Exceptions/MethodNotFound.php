<?php

namespace App\Exceptions;

use Exception;

class MethodNotFound extends Exception
{
    public function __construct(string $method)
    {
        $this->message = " $method Not Found ";
    }
}
