<?php

function parseContacts($filename)
{
	$contacts = array();

	// todo - read file and parse contacts
	
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$people = explode("\n", $contents);
	array_pop($people);
	foreach($people as $person)
	{		
		$info = explode("|", $person);
		$nameArray =[];
		$nameArray['Name'] = $info[0];
		$nameArray['Phone'] = $info[1];
		array_push($contacts , $nameArray);
		// $contacts[] = $nameArray <----short hand for array_push.
		
	}
	
	fclose($handle);
	return $contacts;
}

$filename = 'contacts.txt';
var_dump(parseContacts($filename));

// function formatPhoneNumber ($numberString) 
// {


// }




// $data = "2101234567";
// echo "(".substr($data, 0, 3).") ".substr($data, 3, 3)."-".substr($data,6);
















// function formatPhoneNumber($numberString)
// {
// 	//....

// }


// function parseContacts($filename)
// {
// 	// array that will hold associative arrays representing one contact
//     $contacts = [];

//     // get the file contents..
//     $contents = ;

//     //convert contents to an array of lines in the file

//     // loop through the contents array

//     // foreach line in the file..
//     	// construct an associative array with a 'name' and 'phone' key
//     		//we'll need to explode each line on '|' to get the name and number
//     		// do something to format the phone number, maybe formatPhoneNumber
//     		// function?
//     	// push that associavite array onto the contacts array.


//     return $contacts;

// }


















