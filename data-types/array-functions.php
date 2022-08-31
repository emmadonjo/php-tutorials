<?php

// is_array
// $age = 45;
// $sex = 'male';
$names = ['James', 'John'];

$details = [
    'NAME' => 'John',
    "aGe" => 45,
    'SeX' => 'male'
];

// echo is_array($age) . "\n";
// echo is_array($sex) . "\n";
// echo is_array($names) . "\n";

// explode
$names_of_trainees = 'Victor| OTJ-Fake Support>James';

// $exploded_trainees = explode('|', $names_of_trainees);


// // implode
// $converted = implode(', ', $exploded_trainees);

// echo $converted;

// $preg_splited = preg_split("/(\||\-|>)/", $names_of_trainees);
// unset($details['name']);

// $changed = array_change_key_case($details, CASE_UPPER);
// print_r($changed);
// $nums = range(0, 18);

// $alphs = implode('',range('a', 'z'));
// $chunked = array_chunk($nums, 5);

// $nums = [0,2,1,2,3,4,2,1,3,4,4,2,32,31];

// print_r(array_count_values($nums));

$array1 = [1,3,5,7, 5];
// $array2 = [3,5, 5];

// print_r(array_diff($array1, $array2));
// $intersect = array_intersect($array1, $array2);
// print_r(array_unique($intersect));

$users = ['John', 'James', 'Soliu', 'OTJ', 'Mary', 'Esther'];

// $starts_with_j = array_filter($users, function($user){
//     if(str_starts_with($user, 'J')){
//         return $user;
//     }
// });

$mapped = array_map(function($user){
    return 'Hello ' . $user;
}, $users);

// $filtered = [];
// foreach($users as $user){
//     if(str_starts_with($user, "J")){
//         $filtered[] = $user;
//     }
// }

$merge1 = [21,232,'hey'];
$merge2 = [12, 343, 'Hello', 'ha'];
$merge3 = ['Michael', [43, 21,]];
// print_r($mapped);

$merged = array_merge_recursive($merge1, $merge2, $merge3);

print_r($merged);

