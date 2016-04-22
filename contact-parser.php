<?php

function parseContacts($filename)
{
    $contentsArray = [];
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contactsArray = explode("\n", $contents);
    array_pop($contactsArray); 
    fclose($handle);

    foreach ($contactsArray as $friends) {
           
        $contactList = [];

        $personList = explode("|", $friends);

        $name = $personList[0];

        $phnNumber = substr($personList[1], 0, 3) . "-" . substr($personList[1], 3, 3) . "-" . substr($personList[1], 6, 4);

        $contactList = ["Name" => $name , "Number" => $phnNumber];

        array_push($contentsArray, $contactList);
    }

    return $contentsArray;
}

var_dump(parseContacts('contacts.txt'));
