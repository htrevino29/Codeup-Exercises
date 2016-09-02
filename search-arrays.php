<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
$query = 'Tina';
$result = array_search($query, $names);
$result2 = array_search($compare, $names);


// if ($result !== false) {
//     echo $names[$result].PHP_EOL;
// }else{
// 	echo "false";
// }


// takes an array and a search term
// returns true or false depeneding on if the search term is in the array.
function arrayContains($haystack, $needle){
	return array_search($needle, $haystack) !== false;
}

// testing our arrayContains
var_dump(arrayContains($names, "Bob"));
var_dump(arrayContains($names, "Tina"));
var_dump(arrayContains($names, "Mike"));

// will take two arrays and returns the number of items
// in common between the two
function compareArrays($arrayOne, $arrayTwo){
	//keep a count of the common elements
	$count = 0;
	// loop through one array for every item
	foreach($arrayOne as $value) {
		// if the item is in the second array, increment our count
		if(arrayContains($arrayTwo, $value)){
			$count +=1;
		}
	}
	// return the count
	return $count;
}

var_dump(compareArrays($names, $compare));



