<?php

function format_nums(array $numbers)
{
    $valid = array_filter($numbers, function($number){
        if(str_starts_with($number, '234') && strlen($number) == 13){
            return true;
        }

        if(str_starts_with($number, '+234') && strlen($number) == 14){
            return true;
        }

        if(str_starts_with($number, '0') && strlen($number) == 11){
            return true;
        }

        return false;
    });

     $invalid = array_filter($numbers, function($number){
        if(str_starts_with($number, '234') && strlen($number) == 13){
            return false;
        }

        if(str_starts_with($number, '+234') && strlen($number) == 14){
            return false;
        }

        if(str_starts_with($number, '0') && strlen($number) == 11){
            return false;
        }

        return true;
    });


    return [
        'valid' => $valid,
        'invalid' => $invalid
    ];
}

$numbers = ['+2348033445566', '0802324', '2348033445566', '08033445566'];

$invalid = format_nums($numbers)['invalid'];
$valid = format_nums($numbers)['valid'];

$formatted = array_map(function($num){
    if(str_starts_with($num, '234') && strlen($num) == 13){
        return '+' . $num;
    }

    if(str_starts_with($num, '0') && strlen($num) == 11){
        return '+234' . substr($num, 1);
    }
    return $num;
}, $valid);

print_r(array_unique($formatted));
