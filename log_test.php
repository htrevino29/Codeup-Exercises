<?php  
require_once 'Log.php';



$test = new Log();
$test->filename='log-'.date('Y-m-d').'.log';
$test->logInfo('this is a message');
$test->logError('this is a message');


//$message->logError(" username or password is incorrect");
//$message->logInfo(" user logged in successfully");





?>
