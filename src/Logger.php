<?php namespace Logging;

use Illuminate\Support\Facades\Facade;
use Logging\Log;
class Logger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return new Log();
    }
}
