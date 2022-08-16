<?php

// or - ||
// and - &&
// not - !

// echo 10 || 5 . "\n";
// echo 0 || 0 . "\n";

$min = 18;
$max = 65;
$age = 20;

// if($age < $min || $age > $max){
//     echo 'You are not within the age limit.';
// }

// if($age >= $min && $age <= $max){
//     echo 'You are qualified!';
// }

$age = ' ';

if(!trim($age)){
    echo 'No age has been specified.';
}