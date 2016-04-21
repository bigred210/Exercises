<?php

function parseContacts($filename)
{
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contactsArray = explode("\n", $contents);
    fclose($handle);
    array_pop($contactsArray); 
    return $contactsArray;
}

var_dump(parseContacts('contacts.txt'));
