<?php  

echo "-------- number 2 ----------".PHP_EOL;

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $thing) {
    if (is_integer($thing)) {
        echo "{$thing} is a integer\n";
    } 
    if (is_float($thing)) {
     	echo "{$thing} is a float\n";
    }
    if (is_bool($thing)) {
    	echo "boolean\n";
    }
    if (is_array($thing)) {
    	echo "{$thing} is a array\n";
    }
    if (is_null($thing)) {
    	echo "null\n";
    }
    if (is_string($thing)) {
    	echo "{$thing} is a string\n";
    }

}

echo "-------- number 3 ----------".PHP_EOL;

$things2 = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things2 as $thing2) {
    if (is_scalar($thing2)) {
        echo "{$thing2} is scalar\n";
    } 
}   

echo "-------- number 4 ----------".PHP_EOL;

$things3 = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things3 as $thing3) {
    if (is_integer($thing3)) {
        echo "{$thing3}\n";
    } 
    if (is_float($thing3)) {
     	echo "{$thing3}\n";
    }
    if (is_bool($thing3)) {
    	echo "{$thing3}\n";
    }
    if (is_array($thing3)) {
    	echo "The type is " . gettype($thing3) . ". The value is: ";
    	
    	foreach($thing3 as $value){
    		echo $value . " ";
    	}
    	echo PHP_EOL;
    }
    if (is_null($thing3)) {
    	echo "{$thing3}\n";
    }
    if (is_string($thing3)) {
    	echo "{$thing3}\n";
    }

}