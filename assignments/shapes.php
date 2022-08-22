<?php

// str_repeat, str_pad

// echo str_repeat('*', 10);
// echo str_pad('PHP', 10, '*');

// echo str_pad('*', 10, ' ', STR_PAD_LEFT) . "\n";
// echo str_pad(str_repeat('*', 2), 10, ' ', STR_PAD_LEFT) . "\n";
// echo str_pad(str_repeat('*', 3), 10, ' ', STR_PAD_LEFT) . "\n";
// echo str_pad(str_repeat('*', 4), 10, ' ', STR_PAD_LEFT) . "\n";
// echo str_pad(str_repeat('*', 5), 10, ' ', STR_PAD_LEFT) . "\n";
// echo str_pad(str_repeat('*', 6), 10, ' ', STR_PAD_LEFT) . "\n";
// echo str_pad(str_repeat('*', 7), 10, ' ', STR_PAD_LEFT) . "\n";
// echo str_pad(str_repeat('*', 8), 10, ' ', STR_PAD_LEFT) . "\n";
// echo str_pad(str_repeat('*', 9), 10, ' ', STR_PAD_LEFT) . "\n";
// echo str_pad(str_repeat('*', 10), 10, ' ', STR_PAD_LEFT) . "\n";


// function rect(int $height, int $width){
//     for($i = 1; $i <= $height; $i++){
//         echo str_repeat('*', $width) . "\n";
//     }
// }

// rect(5, 20);

// $words = 'PHP is quite amazing.';
// for($char = 0; $char < strlen($words); $char++){
//     if($words[$char] == ' '){
//         echo $words[$char];
//     }
//     else if($char % 2 == 1){
//         echo strtoupper($words[$char]);
//     }
//     else{
//         echo strtolower($words[$char]);
//     }
// }


function equi(int $height){
    for ($i = 1; $i <= $height; $i++){
        $pad_num = ($height - $i) % 2 == 0 ? $height + 1 : $height;

        // $pad_num = 0;
        // if($height % 2 == 0){
        //     $pad_num = $height + 1;
        // }
        // else{
        //     $pad_num = $height;
        // }

        echo str_pad(str_repeat('*', $i), $pad_num, ' ', STR_PAD_BOTH) . "\n";
    }
}


equi(10);
