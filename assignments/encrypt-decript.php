<?php

function encrypt(string $value)
{
    // $even = [];
    // $odd = [];

    $even = '';
    $odd = '';

    $length = strlen($value);
    $i = 0;

    for($i; $i < $length; $i++){
        if($i % 2 == 0){
            $even .= $value[$i];
        }
        else{
            $odd .= $value[$i];
        }
    }

    // return implode('', $even) . implode('', $odd);

    return $even . $odd;
}


function decrypt(string $encrypted)
{
    $length = strlen($encrypted);
    $even = '';
    $odd = '';
    $decrypted = '';

    if($length % 2 == 0){
        $even = substr($encrypted, 0, $length/2);
        $odd = substr($encrypted, $length/2);
    }
    else{
        $even = substr($encrypted, 0, ($length + 1)/2);
        $odd = substr($encrypted, ($length + 1)/2);
    }

    $i = 0;

    if($length % 2 == 1){
        for($i; $i < strlen($odd); $i++){       
    
            $decrypted .= $even[$i] . $odd[$i];        
        }

        $decrypted .= $even[$i];
    }
    else{

        for($i; $i < strlen($even); $i++){       
    
            $decrypted .= $even[$i] . $odd[$i];        
        }
    }

    return $decrypted;
}




$value = readline('Please enter a text: ');

$encrypted =  encrypt($value);

echo $encrypted . "\n";

echo "Decrypted string is: \n";

echo decrypt($encrypted) . "\n";
