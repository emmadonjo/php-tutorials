<?php 

$names =  []; // array
// echo  count($names);
// echo "\n";

$names[] = "joshua";
$names[] = 456789;

// echo  count($names);
// echo "\n";
// index
$coding = [
    'backend' => 'PHP',
    'frontend' => 'Js',
    'database' => 'MySQL',
    'server' => 'apache'
];

$output = "<ul>";

foreach($coding as $key => $list){
    echo "<li>$key : $list</li>";
}

echo "</ul>";