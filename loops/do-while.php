<?php
// $i = 1;
// do {
//     echo $i++ . "\n";
// }
// while($i <= 100);

$pls = ['php', 'javascript', 'java', 'golang', 'cobol'];

$pl = 0;

do {
    echo $pls[$pl++] . "\n";
}
while($pl < count($pls));