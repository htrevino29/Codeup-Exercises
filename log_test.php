<?php  
require_once 'Log.php';
$logLevel='info';
$message ='user logged in';


$test = new log();
$test->filename='log-'.date('Y-m-d').'.log';
$test->logMessage($logLevel, $message);


//$message->logError(" username or password is incorrect");
//$message->logInfo(" user logged in successfully");





?>
