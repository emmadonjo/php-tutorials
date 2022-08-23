<?php

$lives = 5;
$score = 0;
$computer_score = 0;

$highest_scores = [];
$game_over = false;
$player = readline('Enter your name: ') . "\n";

print(str_repeat('-', 20) . "\n");
print(str_pad('Game Begins', 20, '*', STR_PAD_BOTH) . "\n");

$i = 0;

$choices = ['rock', 'paper', 'scissors'];

while(!$game_over){

    $index = mt_rand(0, 2);
   
    $user_choice = readline('Enter ' . implode(', ', $choices) . ": ");
// paper wins over rock
// rock wins over scissors
// scissors wins over paper
    $computer_choice = $choices[$index];

    if($user_choice == 'paper' && $computer_choice != 'scissors'){
        // user wins
    }
    elseif($user_choice == 'paper' && $computer_choice == 'scissors'){
        // computer wins
    }
    elseif($user_choice == 'scissors' && $computer_choice != 'rock'){
        // user wins
    }
    elseif($user_choice == 'paper' && $computer_choice == 'rock'){
        // computer wins
    }
   
}