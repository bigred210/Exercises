<?php

// TODO: Create your inspect() function here
function inspect($variable) 
{
    if (is_string($variable)) {
        return " I am a String\n";
    }elseif (is_array($variable)) {
        return " I am an Array\n";
    }elseif (is_bool($variable)) {
        return " I am a Boolean\n";
    }elseif (is_int($variable)) {
        return " I am an Integer\n";
    }elseif (is_float($variable)) {
        return " I am a Float\n";
    }elseif (is_null($variable)) {
        return " I am NULL\n";
    }else {
        return " I am having an identity crisis\n";
    }
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 
$num3 = 12;
$num4 = 14.4;
$null = NULL;



// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . inspect($num1) . PHP_EOL;
    
echo 'Inspecting $num2:' . inspect($num2) . PHP_EOL;
    
echo 'Inspecting $num3:' . inspect($num3) . PHP_EOL;
    
echo 'Inspecting $num4:' . inspect($num4) . PHP_EOL;
    
echo 'Inspecting $null:' . inspect($null) . PHP_EOL;
    
echo 'Inspecting $bool1' . inspect($bool1) . PHP_EOL;
    
echo 'Inspecting $bool2' . inspect($bool2) . PHP_EOL;
    
echo 'Inspecting $string1' . inspect($string1) . PHP_EOL;
    
echo 'Inspecting $string2' . inspect($string2) . PHP_EOL;
    
echo 'Inspecting $array1' . inspect($array1) . PHP_EOL;
    
echo 'Inspecting $array2' . inspect($array2) . PHP_EOL;
    









