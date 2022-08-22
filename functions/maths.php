<?php

// power 
// echo pow(2, 3);

// echo pow(2, -4);

// echo sqrt(9);
// echo abs(-10);
// echo ceil(-4.3);

// echo floor(-4.3);
// echo sin(60);
// cos()
// // cosh();
// $val = deg2rad(30);

// echo rad2deg($val);

// echo mt_rand(111111, 999999);
// echo uniqid('PHP_', true);
// echo sha1(time());
// echo date('d-m-Y H:a');
// echo random_int(0, 100000000);
// echo rand(0, 10);

// echo base_convert(2, 10, 2);
echo 'Enter one of +, -, / or *';
$operator = readline('Please enter an operator: ');
$num1 = readline('Enter first number: ');
$num2 = readline('Enter second number: ');

if($operator == '+'){
    echo $num1 + $num2;
}
elseif($operator == '-'){
    echo $num1 - $num2;
}
elseif($operator == '/'){
    echo $num1 / $num2;
}
elseif($operator == '*'){
    echo $num1 * $num2;
}
else{
    echo 'Invalid operator';
}