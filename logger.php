<?php

function logMessage($logLevel, $message)
{
    // todo - complete this function
    $filename = 'log-'.date('Y-m-d').'.log';
	$handle = fopen($filename, 'a');
	fwrite($handle, date('y-m-d H:i:s '). $logLevel . $message .PHP_EOL);
	fclose($handle);
}

function logInfo($message){
	logMessage('INFO:', $message);
}
function logError($message){
	logMessage('ERROR:', $message);
}

logError(" username or password is incorrect");
logInfo(" user logged in successfully");


