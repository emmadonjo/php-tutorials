<?php

function scatter(string $delimiter, $text)
{
    $flag = 0;
    $breaks = array();

    for($j = 0; $j < strlen($text); $j++)
    {
        if($text[$j] === $delimiter){

            if(!strpos($text, $delimiter, $flag)){
                break;
            }
            else{
                $breaks[] = substr($text, $flag, $j);
            }
            $j++;
            $flag = $j;
        }
    }

    return $breaks;
}

print_r(scatter(',', 'Test,explode,function'));