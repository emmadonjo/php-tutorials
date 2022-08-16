<?php

// str_repeat, str_pad

// echo str_repeat('*', 10);
// echo str_pad('PHP', 10, '*');

echo str_pad('*', 10, ' ', STR_PAD_LEFT) . "\n";
echo str_pad(str_repeat('*', 2), 10, ' ', STR_PAD_LEFT) . "\n";
echo str_pad(str_repeat('*', 3), 10, ' ', STR_PAD_LEFT) . "\n";
echo str_pad(str_repeat('*', 4), 10, ' ', STR_PAD_LEFT) . "\n";
echo str_pad(str_repeat('*', 5), 10, ' ', STR_PAD_LEFT) . "\n";
echo str_pad(str_repeat('*', 6), 10, ' ', STR_PAD_LEFT) . "\n";
echo str_pad(str_repeat('*', 7), 10, ' ', STR_PAD_LEFT) . "\n";
echo str_pad(str_repeat('*', 8), 10, ' ', STR_PAD_LEFT) . "\n";
echo str_pad(str_repeat('*', 9), 10, ' ', STR_PAD_LEFT) . "\n";
echo str_pad(str_repeat('*', 10), 10, ' ', STR_PAD_LEFT) . "\n";


