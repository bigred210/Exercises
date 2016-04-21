<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];




echo "------------------------\n";

function searchingArrays($query, $anyArray) {
    if (array_search($query, $anyArray) !== false) {
        return true;
    } else {
        return false;
    }
}

echo searchingArrays('Tina', $names) . PHP_EOL;

echo "------------------------\n";
echo "------------------------\n";

$arrayOne = $names;
$arrayTwo = $compare;

function inCommon($arrayOne, $arrayTwo) {
    $namesCommon = 0;
    foreach ($arrayOne as $query) {
        if (searchingArrays($query, $arrayTwo) == true) {
            $namesCommon++;
        }
    }  
    return $namesCommon; 
}

echo inCommon($names, $compare) . PHP_EOL;

echo "------------------------\n";




