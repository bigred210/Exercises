<?php

function add($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        return throwErrorMessage($a, $b);
    } else {
        return $a + $b;
    }
}


function subtract($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        return throwErrorMessage($a, $b);
    } else {
        return $a - $b;
    }
}

function multiply($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        return throwErrorMessage($a, $b);
    } else {
        return $a * $b;
    }
}

function divide($a, $b)
{
   if (!is_numeric($a) || !is_numeric($b) || ($b == 0)) {
        return throwErrorMessage2($a, $b);
    } else {
         return $a / $b;
    }
}

function throwErrorMessage($a, $b) 
{
    return "ERROR: Both arguments \$a : {$a} and \$b : {$b} must be numbers\n";
}
function throwDivisionError($a, $b) 
{
    return "ERROR: Both arguments \$a : {$a} and \$b : {$b} must be numbers or you are trying to divide by zero\n";
}

echo add(5, 2) . PHP_EOL;

echo "---\n";

echo subtract(5, 2) . PHP_EOL;

echo "---\n";

echo multiply(5, 2) . PHP_EOL;

echo "---\n";

echo divide(5, 2) . PHP_EOL;


echo "__ ʕ•̫͡•ʕ*̫͡*ʕ•͓͡•ʔ-̫͡-ʕ•̫͡•ʔ*̫͡*ʔ-̫͡-ʔ __\n"; 


echo add(5, 2) . PHP_EOL;

echo "---\n";

echo add(5, -2) . PHP_EOL;

echo "---\n";

echo add(5, 0) * add(2, 0) . PHP_EOL;

echo "---\n";

echo add(5, 0) / add(2, 0) . PHP_EOL;





