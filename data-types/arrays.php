<?php 

// creating arrays
$people = ['James', 'Victor', 'Victress'];
// $mixed_array = ['Name', 546378];

// $people = array('james', 'Kemi', 4356728, ['Johnson']);

// adding to an array
$people[] = 'Gloria';
// $people[] = 564226;
// $people[] = ['Hello'];

// array_unshift($people, 'J');
// array_shift($people);
// array_shift($people);

$formmated = array_map(function($person){
    return str_pad($person, 10, '*', STR_PAD_BOTH);
}, $people);



var_dump($formmated);
// $names =  []; // array
// // echo  count($names);
// // echo "\n";

// $names[] = "joshua";
// $names[] = 456789;

// // echo  count($names);
// // echo "\n";
// // index
// $coding = [
//     'backend' => 'PHP',
//     'frontend' => 'Js',
//     'database' => 'MySQL',
//     'server' => 'apache'
// ];

// $output = "<ul>";

// foreach($coding as $key => $list){
//     echo "<li>$key : $list</li>";
// }

// echo "</ul>";