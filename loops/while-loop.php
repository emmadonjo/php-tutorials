<?php
// $i = 0;
// while($i <= 100){
//     if($i % 2 == 1){

//         echo $i++ . "\n";
//     }
//     else{
//         $i++;
//     }
// }

// $pls = ['php', 'javascript', 'java', 'golang', 'cobol'];

// // $count = count($pls);
// $i = 0;
// while($i < count($pls)){
//     // echo $pls[$i++] . "\n";

//     echo $pls[$i] . "\n";
//     $i++;
// }

$string = 'PHP is one of the easiest programming languages.';

$y = 0;
while($y < strlen($string)){

    if($y % 2 ==  1){
        echo strtolower($string[$y++]) . "\n";
    }
    else{

        echo strtoupper($string[$y++]) . "\n";
    }
}