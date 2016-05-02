<?php

require_once 'Log.php';

date_default_timezone_set("America/Chicago");

$log = new Log('cli');


$log->logInfo("Yay! Info stuff."); 

$log->logError("OOPs! Error Error Error.");