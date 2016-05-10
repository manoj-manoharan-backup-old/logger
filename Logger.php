<?php namespace yogeswaranmanoharan\logger;

use Illuminate\Support\Facades\Facade;

class Tester extends Facade
{
    protected static function getFacadeAccessor()
    {
        return new Log();
    }
}