<?php


$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);

// $lastPhysicist = array_pop($physicistsArray);

// $newPhysicistsString = implode(', ', $physicistsArray);

// $newPhysicistsString .= ' and ' . $lastPhysicist;

// $famousFakePhysicists = $newPhysicistsString;



echo "===================================\n";

function humanizedList($physicistsArray, $physicistsAlpha = false) {

    $lastPhysicist = array_pop($physicistsArray);

    if($physicistsAlpha) {
        sort($physicistsArray);
    }

    $newPhysicistsString = implode(', ', $physicistsArray);

    $famousFakePhysicists = $newPhysicistsString .= ' and ' . $lastPhysicist;

        return $famousFakePhysicists;
}

$famousFakePhysicists = humanizedList($physicistsArray);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;

echo "===================================\n";

$famousFakePhysicists = humanizedList($physicistsArray, true);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;






