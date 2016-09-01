<?php



// global variables added for exercise.
$val1 = 5;
$val2 = 10;


function add($a, $b)
{
    return $a + $b;
}
	echo add(1, 1).PHP_EOL;

function subtract($a, $b)
{
    return $a - $b;
}
	echo subtract(2,1).PHP_EOL;

function multiply($a, $b)
{
    return $a * $b;
}
	echo multiply(2,3).PHP_EOL;

function divide($a, $b)
{
    return $a / $b;
}
	echo divide(10,2).PHP_EOL;

// Add code to test your functions here
// Add a function modulus that finds the modulus of 2 numbers.
// Add test code and verify the output of modulus.
function modulus($a, $b)
{
	return $a % $b;
}
	echo modulus(9,3).PHP_EOL;


echo "----------------------- global stuff ----------------------".PHP_EOL;
echo add($val1,$val2).PHP_EOL;
echo subtract($val1,$val2).PHP_EOL;
echo multiply($val1,$val2).PHP_EOL;
echo divide($val1,$val2).PHP_EOL;