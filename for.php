<?php

    //prompt user to enter a starting number
fwrite(STDOUT,"Please enter a starting number\n");
$min = trim(fgets(STDIN));
    //prompt user to enter an ending numer
fwrite(STDOUT,"Please enter an ending number\n");
$max = trim(fgets(STDIN));
    // for loop used to show user the value from start to finish
for ($i = $min; $i <= $max; $i++) {
    echo "\$i has a value of {$i}\n";
}