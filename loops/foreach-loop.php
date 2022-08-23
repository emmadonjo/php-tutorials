<?php

// $pls = ['php', 'javascript', 'java', 'golang', 'cobol'];

// foreach($pls as $index => $v){
//     echo $pls[$index] . "\n";
//     // echo $v . "\n";

// }

// $langs = [
//     'name' => 'php', 'side' => 'backend', 'env' => 'server', 'field' => 'web dev'
// ];

// print('Title        Value');

// foreach($langs as $index => $lang){
//     echo $index . '   ' . $lang ."\n";
// }

$questions = [
    'The capital of Nigeria is',
    'Ibadan is in which region',
    'PHP in full means',
];

$answers = ['Abuja', 'South West', 'Hypertext Preprocessor'];

$score = 0;
$expected_score = 15;

foreach($questions as $key => $question){
    $response = readline($question . "? ");

    if(strtolower($response) == strtolower($answers[$key])){
        $score += 5;
    }
}

echo 'QUIZZ OVER' . "\n";
echo 'YOUR SCORE: ' . $score . "\n";
echo "PERCENTAGE: " . ($score/$expected_score) * 100 . "\n";