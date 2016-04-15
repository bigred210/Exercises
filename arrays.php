<?php

    // * step1
// $numbers = array(
//     '1',
//     '2',
//     '3',
//     '4',
//     '5'
// );
// var_dump($numbers);
// print_r($numbers);

    // * step2
$numbers = [
    '1',
    '2',
    '3',
    '4',
    '5'
];
var_dump($numbers);
print_r($numbers);

    // * step3
echo $numbers[3] . PHP_EOL;



//----------------------------------------------


    // * step4
$contacts = [
    'first_name' => 'Jerod',
    'last_name' => 'West',
    'email' => 'jerod.west@gmail.com',
    'phone' => '210-589-3122'
];
var_dump($contacts);
print_r($contacts);

//----------------------------------------------


    // * step5
$test = [
    $person1 = [
        'first_name' => 'Jerod',
        'last_name' => 'West',
        'email' => 'jerod.west@gmail.com',
        'phone' => '210-589-3122'
    ],
    $person2 = [
    'first_name' => 'Big',
    'last_name' => 'Red',
    'email' => 'BigRed@gmail.com',
    'phone' => '210-598-3122'
    ],
    $person3 = [
    'first_name' => 'Ruby',
    'last_name' => 'Rojo',
    'email' => 'rubyRojo@gmail.com',
    'phone' => '210-589-3212'
    ]
];
var_dump($test);
print_r($test);

