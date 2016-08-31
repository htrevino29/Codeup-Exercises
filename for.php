<?php 



function tryAgain(){
	fwrite(STDOUT, 'enter a low and high value!? '.PHP_EOL);
	fwrite(STDOUT, 'Low number first...'.PHP_EOL);

	$minValue = trim(fgets(STDIN).PHP_EOL);
	if(is_numeric($minValue)){
		fwrite(STDOUT, 'Now the high'.PHP_EOL);
		$maxValue = trim(fgets(STDIN).PHP_EOL);

		if(is_numeric($maxValue)){
			fwrite(STDOUT, 'enter a value to increment by'.PHP_EOL);
			$incrementValue = trim(fgets(STDIN).PHP_EOL);
			
			if(is_numeric($incrementValue && $incrementValue != 0)){
				echo "/\/\+++++\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/".PHP_EOL;
				echo "/\/\/\/\/\/\/\/\/\/\do math\/\/\/\/\/++\/\/\/".PHP_EOL;
				echo "/\/\/\/\moar math\/\/\/\/\/\/\/\/\/\/\/\/\/\/".PHP_EOL;
				echo "/\/\/\/\/\/\/\/\/+++/\/\/\/\/\/\ok done\/\/\/".PHP_EOL;
			} elseif($incrementValue = " "){
				$incrementValue = 1;
				echo "/\/\+++++\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/".PHP_EOL;
				echo "/\/\/\/\/\/\/\/\/\/\do math\/\/\/\/\/++\/\/\/".PHP_EOL;
				echo "/\/\/\/\moar math\/\/\/\/\/\/\/\/\/\/\/\/\/\/".PHP_EOL;
				echo "/\/\/\/\/\/\/\/\/+++/\/\/\/\/\/\ok done\/\/\/".PHP_EOL;

			}else {
				fwrite(STDOUT, 'you suck at life try again'.PHP_EOL);
				tryAgain();
			}

		} else {
			fwrite(STDOUT, 'you suck at life try again'.PHP_EOL);
			tryAgain();
		}
	} else {
		fwrite(STDOUT, 'you suck at life try again'.PHP_EOL);
		tryAgain();
	}

	for ($minValue = 0; $minValue <= $maxValue; $minValue += $incrementValue) {
		echo $minValue.PHP_EOL;
	}
	
}	
tryAgain();




