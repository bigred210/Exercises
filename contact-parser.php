<?php

function parseContacts($filename)
{
    $contentsArray = [];
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contactsArray = explode("\n", $contents);
    array_pop($contactsArray); 
    fclose($handle);

        // foreach created to loop through $contentsArray 
    foreach ($contactsArray as $friends) {
            // new empty array created to push info in
        $contactList = [];
            // var equals info split at the | in $friends
        $personList = explode("|", $friends);
            // var equals info at index[0] for $personList 
        $name = $personList[0];
            // var equals info at index[1] for $personList * using subtr to concat a "-" 
        $phnNumber = substr($personList[1], 0, 3) . "-" . substr($personList[1], 3, 3) . "-" . substr($personList[1], 6, 4);
            // setting empty array $contactList to equal [Name[0] and Number[1]
        $contactList = ["Name" => $name , "Number" => $phnNumber];
            // pushing info of $contactList into $contentsArray 
        array_push($contentsArray, $contactList);
    }

    return $contentsArray;
}

var_dump(parseContacts('contacts.txt'));
