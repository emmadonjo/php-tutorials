<?php

$questions = [
    'The capital of Nigeria is',
    'Ibadan is in which region',
    'PHP in full means',
];

$answers = ['Abuja', 'South West', 'Hypertext Preprocessor'];

$score = 0;
$expected_score = 15;

for($i =  0; $i < count($questions); $i++){
    $ask = readline($questions[$i] . "? ");

    if(strtolower($ask) ==  strtolower($answers[$i])){
        $score += 5;
    }
}

echo 'QUIZZ OVER' . "\n";
echo 'YOUR SCORE: ' . $score . "\n";
echo "PERCENTAGE: " . ($score/$expected_score) * 100 . "\n";

