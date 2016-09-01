<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 

 $dayOfWeek = date('N');

 switch($dayOfWeek) {
	case 1:
       echo "Mon".PHP_EOL;
       break;

	case 2:
       echo "Tue".PHP_EOL;
       break;

    case 3:
       echo "Wed".PHP_EOL;
       break;

    case 4:
   	   echo "Thur".PHP_EOL;
   	   break;

    case 5:
       echo "Fri".PHP_EOL;
       break;

    case 6:
       echo "Sat".PHP_EOL;
       break;

    case 7:
       echo "Sun".PHP_EOL;
       break;

 }