<?php 

 // Converts array into list n1, n2, ..., and n3
 function humanizedList($array) {
 // Your solution goes here!
 // for the last item on the list add "and" infront of it.
 	$last = end($array);
 	$last = " and ". $last;
 	array_push($array, $last);
 	return $array;
 }
 // List of famous peeps
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
 // TODO: Convert the string into an array
 $physicistsArray = explode(', ', $physicistsString);
 
 // Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray);
 $famousFakePhysicists = implode(",",$famousFakePhysicists);
 
 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.".PHP_EOL;





