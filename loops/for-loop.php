<?php

$pls = ['php', 'javascript', 'java', 'golang', 'cobol'];

for($i = 0; $i < count($pls); $i++){
    echo $i + 1 . '. ' . $pls[$i] . "\n";
}

// for($i = 1; $i <= 100; $i++){
//     if($i % 6 == 0){
//         echo $i . "\n";
//     }
// }

// $m = 'PHP is an amazing programming language.';

// for($letter = 0; $letter < strlen($m); $letter++){
//     echo $m[$letter] . "\n";
// }

// for ($i = 1; $i <= 10; $i++){
//     echo str_pad(str_repeat('*', $i), 10, ' ', STR_PAD_RIGHT) ."\n";
// }

// function rightAngleTriangle(int $height)
// {
//     for ($i = 1; $i <= $height; $i++){
//         echo str_pad(str_repeat('*', $i), $height, ' ', STR_PAD_RIGHT) ."\n";
//     }
// }

// rightAngleTriangle(8);

// for($num = 0; $num < 50; $num++){
//     echo $num . "\n";
//     if($num == 30){
//         break;
//     }
// }

// for($num = 1; $num <= 10; $num++){
//     if($num % 5 == 0){
//         echo $num . "\n";
//     }

//     continue;

//     echo 'Got here' . "\n";
// }