<?php

// global variables added for exercise.
// $val1 = 5;
// $val2 = 10;
function throwError(){
	return "ERROR: Both arguments must be numbers\n";
}

function add($a, $b){
	 if (is_numeric($a) && is_numeric($b)) {
		return $a + $b;
	} else {
		throwError();
	}
}
	echo add(1, 1).PHP_EOL;

function subtract($a, $b){
	 if (is_numeric($a) && is_numeric($b)) {
		return $a - $b;
	} else {
		throwError();
	}
}
	echo subtract(2,1).PHP_EOL;

function multiply($a, $b){
 if (is_numeric($a) && is_numeric($b)) {
		return $a * $b;
	} else {
		throwError();
	}
}
	echo multiply(2,3).PHP_EOL;

function divide($a, $b){
 if (is_numeric($a) && is_numeric($b) && $a != 0  && $b != 0) {
		return $a / $b;
	} else {
		throwError();
	}
}
	echo divide(10,9).PHP_EOL;

// Add code to test your functions here
// Add a function modulus that finds the modulus of 2 numbers.
// Add test code and verify the output of modulus.
function modulus($a, $b){
 if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;
	} else {
		throwError();
	}
}
	echo modulus(9,3).PHP_EOL;

echo "----------------------- global stuff ----------------------".PHP_EOL;

// echo add($val1,$val2).PHP_EOL;
// echo subtract($val1,$val2).PHP_EOL;
// echo multiply($val1,$val2).PHP_EOL;
// echo divide($val1,$val2).PHP_EOL;