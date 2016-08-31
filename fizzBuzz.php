<?php  

for ($i = 1; $i <= 100; $i += 1) {
	if($i % 3 == 0 && $i % 5 == 0)
		echo "fizzBuzz";
	if($i % 3 == 0 ){
		echo "Fizz";
	}
	if($i % 5 == 0){
		echo "Buzz";
	} else {
     	echo $i.PHP_EOL;
	}
}





