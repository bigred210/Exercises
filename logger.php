<?php
date_default_timezone_set("America/Chicago");

function logMessage($logLevel, $message)
{
    $currentLog = date('Y-m-d');
    $currentTime = date('h:i:s=T');
    $filename = "log-{$currentLog}.log";
    $handle = fopen($filename, 'a');
    fwrite($handle, $currentLog . ' ' . $currentTime . ' ' . "[$logLevel]" . ' ' . $message . PHP_EOL);
    fclose($handle);
}

function logInfo($message)
{
   logMessage("INFO", "$message"); 
}


function logError($message)
{
   logMessage("ERROR", "$message");
}

logInfo("Yay! Info stuff.");

logError("OOPs! Error Error Error.");

