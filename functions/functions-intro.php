<?php 

function profit(float $sales, float $cost){
    return $sales - $cost;
}

function greetings(string $username = null)
{
    if(!$username){
        return 'Hello! Welcome to cloudware';
    }

    return "Hello $username! Welcome to cloudware.";
}


// $cost = 1000;
// $sales = 2000;

// $profit = profit($sales , $cost);

// echo $profit;

// echo "\n";

// $previous_cost = 8000;
// $previous_sales = 10000;

// $previous_profit = profit(10000, 8000);

// echo $previous_profit;
echo greetings();

echo "\n";
echo greetings(23456789);

echo "\n";