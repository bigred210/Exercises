<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];




echo "------------------------\n";

// function searchingArrays($query, $anyArray) {
//     if (array_search($query, $anyArray) !== false) {
//         return true;
//     } else {
//         return false;
//     }
// }

// echo searchingArrays('Tina', $names) . PHP_EOL;


// echo "------------------------\n";
// echo "------------------------\n";


// $arrayOne = $names;
// $arrayTwo = $compare;

// function inCommon($arrayOne, $arrayTwo) {
//     $namesCommon = 0;
//     foreach ($arrayOne as $query) {
//         if (searchingArrays($query, $arrayTwo) == true) {
//             $namesCommon++;
//         }
//     }  
//     return $namesCommon; 
// }

// echo inCommon($arrayOne, $arrayTwo) . PHP_EOL;


echo "------------------------\n";
echo "------------------------\n";


// $arrayOne = $names;
// $arrayTwo = $compare;


// function combine_arrays($arrayOne, $arrayTwo) {
//     $arrayCombine = [];
//     foreach ($arrayOne as $query) {
//         if (searchingArrays($query, $arrayTwo) == true) {
//             array_unshift($arrayCombine, $query);
//         } elseif (searchingArrays($query, $arrayTwo) == false) {
//             array_push($arrayCombine, $query);
//         }
//     }
//     return $arrayCombine;
// }
// var_dump(combine_arrays($arrayOne, $arrayTwo));


echo "------------------------\n";
echo "------------------------\n";


$arrayOne = $names;
$arrayTwo = $compare;

function combine_arrays($arrayOne, $arrayTwo) {
    $arrayCombine = [];
    foreach ($arrayOne as $key => $value) {
        if ($value == $arrayTwo[$key]) {
            array_push($arrayCombine, $value);
        } else {
            array_push($arrayCombine, $value, $arrayTwo[$key]);
        }
    }
    return $arrayCombine;
}

var_dump(combine_arrays($arrayOne, $arrayTwo));





