<?php namespace yogeshwaranmanoharan\logger;

use Illuminate\Support\Facades\Facade;

class Logger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return new Log();
    }
}
