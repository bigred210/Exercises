<?php



$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $stuff) {

    if (is_numeric($stuff)) {
        echo "{$stuff} is a number\n";
    }
    elseif (is_string($stuff)) { 
        echo "{$stuff} is a string\n";
    }
    elseif (is_bool($stuff)) {
        echo "{$stuff} is a boolean\n";
    }
    elseif (is_null($stuff)) {
        echo "{$stuff} is a null\n";
    }
    elseif (is_array($stuff)) {
        echo "{$stuff} is an array\n";
    }
        echo "====================" . PHP_EOL;
}


$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $stuff) {
    if (is_scalar($stuff)) {
        echo "{$stuff} is scalar\n";
    }
    elseif (is_array($stuff)) {
        foreach ($stuff as $value) {
            echo "$value\n";
        }
    }
        echo "====================" . PHP_EOL;
}













