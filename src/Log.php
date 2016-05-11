<?php namespace Logging;

use Monolog\Logger as monologLogger;
use Monolog\Handler\StreamHandler;

class Log{

    protected $log;
    protected $path;

    protected $levels = [
        'debug'     => monologLogger::DEBUG,
        'info'      => monologLogger::INFO,
        'notice'    => monologLogger::NOTICE,
        'warning'   => monologLogger::WARNING,
        'error'     => monologLogger::ERROR,
        'critical'  => monologLogger::CRITICAL,
        'alert'     => monologLogger::ALERT,
        'emergency' => monologLogger::EMERGENCY,
    ];


    public function __construct()
    {
        $log = new monologLogger('Local');
        $this->log = $log;
        $this->path = __DIR__ .'/../../../../app/log';
    }

    private function setHandler($level)
    {
        return $this->log->pushHandler(new StreamHandler($this->path .'/logger.log' , $this->levels[$level]));
    }

    public function emergency($message, $context = array())
    {
        return $this->writeLog(__FUNCTION__, $message, $context);
    }

    public function alert($message, $context = array())
    {
        return $this->writeLog(__FUNCTION__, $message, $context);
    }

    public function critical($message, $context = array())
    {
        return $this->writeLog(__FUNCTION__, $message, $context);
    }

    public function error($message, $context = array())
    {
        return $this->writeLog(__FUNCTION__, $message, $context);
    }

    public function warning($message, $context = array())
    {
        return $this->writeLog(__FUNCTION__, $message, $context);
    }


    public function notice($message, $context = array())
    {
        return $this->writeLog(__FUNCTION__, $message, $context);
    }


    public function info($message, $context = array())
    {
        return $this->writeLog(__FUNCTION__, $message, $context);
    }

    public function debug($message, $context = array())
    {
        return $this->writeLog(__FUNCTION__, $message, $context);
    }

    protected function writeLog($level, $message, $context)
    {
        $this->setHandler($level);

        if($this->log->{$level}($message, $context)){
            return true;
        }
        else{
            return false;
        }
    }

}
