<?php

function add($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "ERROR: Both arguments {$a} and {$b}  must be numbers\n";
    }
}

function subtract($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "ERROR: Both arguments {$a} and {$b} must be numbers\n";
    }
}

function multiply($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "ERROR: Both arguments {$a} and {$b} must be numbers\n";
    }
}

function divide($a, $b)
{
   if (is_numeric($a) && is_numeric($b) && ($b != 0)) {
        return $a / $b;
    } else {
        return "ERROR: Both arguments {$a} and {$b} must be numbers or you are trying to divide by zer\n";
    }
}


echo add(5, 2) . PHP_EOL;
echo "----------\n";
echo subtract(5, 2) . PHP_EOL;
echo "----------\n";
echo multiply(5, 2) . PHP_EOL;
echo "----------\n";
echo divide(5, 2) . PHP_EOL;

echo "----------\n";
echo "--++++++--\n";
echo "----------\n";

echo add(5, 2) . PHP_EOL;
echo "----------\n";
echo add(5, -2) . PHP_EOL;
echo "----------\n";
echo add(5, 0) * add(2, 0) . PHP_EOL;
echo "----------\n";
echo add(5, 0) / add(2, 0) . PHP_EOL;





