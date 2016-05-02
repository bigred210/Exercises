<?php

require_once 'Log.php';

date_default_timezone_set("America/Chicago");

$log = new Log;


$log->logInfo("Yay! Info stuff."); 

$log->logError("OOPs! Error Error Error.");