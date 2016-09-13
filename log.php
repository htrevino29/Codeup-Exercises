<?php

class log
{
	public $filename;

	public function logMessage($logLevel, $message)
	{
	    // todo - complete this function   
		$handle = fopen($this->filename, 'a');
		fwrite($handle, date('y-m-d H:i:s '). $logLevel . $message .PHP_EOL);
		fclose($handle);
	}
	public function logInfo($message)
	{
		logMessage('INFO:', $message);
	}
	public function logError($message)
	{
		logMessage('ERROR:', $message);
	}

}
	