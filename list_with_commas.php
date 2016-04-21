<?php


$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);

$lastPhysicist = array_pop($physicistsArray);

$newPhysicistsString = implode(', ', $physicistsArray);

$newPhysicistsString .= ' and ' . $lastPhysicist;

$famousFakePhysicists = $newPhysicistsString;

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;

echo "===================================\n";

function humanizedList($physicistsArray) {

    $lastPhysicist = array_pop($physicistsArray);

    $newPhysicistsString = implode(', ', $physicistsArray);

    $famousFakePhysicists = $newPhysicistsString .= ' and ' . $lastPhysicist;

        return $famousFakePhysicists;
}

humanizedList($physicistsArray);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;

 





