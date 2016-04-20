<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];




echo "------------------------\n";

function searchingArrays($query, $names) {
    if (array_search($query, $names) !== false) {
        return true . PHP_EOL;
    } else {
        return false . PHP_EOL;
    }
}

echo searchingArrays('Bob', $names);

echo "------------------------\n";


















