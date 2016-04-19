<?php

// for ($i = 1; $i <= 100; $i++) {


//     if ( ($i % 3 == 0 ) && ($i % 5 == 0) ) {
//         echo "FIZZBUZZ\n";
//     }
//     elseif ($i % 3 == 0) {
//         echo "FIZZ\n";
//     }
//     elseif ($i % 5 == 0) {
//         echo "BUZZ\n";
    
//     }else {
//         echo "$i\n";
//     }

// }

for ($i = 1; $i <= 100; $i++) {


    if ( ($i % 3 == 0 ) && ($i % 5 == 0) ) {
        `say -v "victoria" FIZZBUZZ\n`;
        echo "FIZZBUZZ\n";
    }
    elseif ($i % 3 == 0) {
        `say -v "victoria" FIZZ\n`;
        echo "FIZZ\n";
    }
    elseif ($i % 5 == 0) {
        `say -v "victoria" BUZZ\n`;
        echo "BUZZ\n";
    }
    else {
        `say -v "victoria" {$i}\n`;
        echo "$i\n";
    }

}