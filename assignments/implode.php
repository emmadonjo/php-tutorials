<?php

function join_data(string $separator = "", ?array $data){
    $joined = '';
    foreach($data as $item){
        $joined .= $item . $separator;
    }

    echo rtrim($joined, $separator);
}

echo join_data(',', ['A', 'B', 'C']);