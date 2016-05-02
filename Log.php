<?php

class Log
{
    public $filename;

    public function logMessage($logLevel, $message)
    {
        $currentLog = date('Y-m-d');
        $currentTime = date('h:i:s=T');
        $handle = fopen($this->filename, 'a');
        fwrite($handle, $currentLog . ' ' . $currentTime . ' ' . "[$logLevel]" . ' ' . $message . PHP_EOL);
        fclose($handle);
    }

    public function logInfo($message)
    {
       $this->logMessage("INFO", "$message"); 
    }

    public function logError($message)
    {
       $this->logMessage("ERROR", "$message");
    }

}