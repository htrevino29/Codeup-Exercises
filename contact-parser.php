<?php

// function parseContacts($filename)
// {
//     $contacts = array();

//     // todo - read file and parse contacts
//     $filename = 'contacts.txt';
// 	$handle = fopen($filename, 'r');
// 	$contents = fread($handle, filesize($filename));
// 	$people = explode("\n", $contents);
// 	foreach($people as $person){		
// 		$info = explode("|", $person);
// 		var_dump($info);	
// 	}

// 	fclose($handle);
//     return $contacts;
// }

// var_dump(parseContacts('contacts.txt'));



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


function formatPhoneNumber($numberString)
{
	//....

}


function parseContacts()
{
	// array that will hold associative arrays representing one contact
    $contacts = [];

    // get the file contents..
    $filename = 'contacts.txt';
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	var_dump( $contents);
	fclose($handle);
   
    //convert contents to an array of lines in the file


    // loop through the contents array

    // foreach line in the file..
    	// construct an associative array with a 'name' and 'phone' key
    		//we'll need to explode each line on '|' to get the name and number
    		// do something to format the phone number, maybe formatPhoneNumber
    		// function?
    	// push that associavite array onto the contacts array.


    return $contacts;

}

var_dump(parseContacts($filename));













