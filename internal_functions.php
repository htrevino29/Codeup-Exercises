<?php

// TODO: Create your inspect() function here
function inspect($variable){
	echo "Is a " .gettype($variable).PHP_EOL;
	echo $variable.PHP_EOL;

	switch (gettype($variable)) {
	    case 'integer':
	        echo "$variable is an integer".PHP_EOL;
	        
	        break;
	    case 'float':
	        echo "$variable is a float".PHP_EOL;
	     
	        break;
	    case 'boolean':
	        echo "$variable is a boolean".PHP_EOL;
	       
	        break;
	    case 'array':
	        echo $variable ." is an array".PHP_EOL;
	        
	        break;
	    case 'null':
	        echo "$variable is null".PHP_EOL;
	        
	        break;
	    case 'string':
	        echo "$variable is a string".PHP_EOL;
	       
	        break;
	    
	}
}

// Do not mofify these variables!
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;
$bool1 = true;
$bool2 = false;
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:'  . PHP_EOL;
	inspect($num1);
	echo PHP_EOL;

echo 'Inspecting $num2:'  . PHP_EOL;
	inspect($num2);
	echo PHP_EOL;

echo 'Inspecting $num3:'  . PHP_EOL;
	inspect($num3);
	echo PHP_EOL;

echo 'Inspecting $num4:'  . PHP_EOL;
	inspect($num4);
	echo PHP_EOL;

echo 'Inspecting $null:'  . PHP_EOL;
	inspect($null);
	echo PHP_EOL;

echo 'Inspecting $bool1'  . PHP_EOL;
	inspect($bool1);
	echo PHP_EOL;

echo 'Inspecting $bool2'  . PHP_EOL;
	inspect($bool2);
	echo PHP_EOL;

echo 'Inspecting $string1'. PHP_EOL;
	inspect($string1);
	echo PHP_EOL;

echo 'Inspecting $string2'. PHP_EOL;
	inspect($string2);
	echo PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;
	inspect($array1);
	echo PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;
	inspect($array2);
	echo PHP_EOL;





