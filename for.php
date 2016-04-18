<?php

    //prompt user to enter a starting number
fwrite(STDOUT,"Please enter a starting number\n");
$min = trim(fgets(STDIN));
    if (!is_numeric($min)) {
        echo "Enter a numeric value for the starting number\n";
        $min = trim(fgets(STDIN));
    } 

    //prompt user to enter an ending numer
fwrite(STDOUT,"Please enter an ending number\n");
$max = trim(fgets(STDIN));
    if (!is_numeric($max)) {
        echo "Enter a numeric value for the endng number\n";
        $max = trim(fgets(STDIN));
    } 

    //prompt user to enter a number to increment by
fwrite(STDOUT,"Please enter an ending number\n");
$increment = trim(fgets(STDIN));


    // for loop used to show user the value from start to finish
for ($i = $min; $i <= $max; $i += $increment) {
    echo "\$i has a value of {$i}\n";
    if (!is_numeric($increment)) {
        $i += 1;
    }
}


