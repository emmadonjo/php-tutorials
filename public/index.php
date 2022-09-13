<?php 
if(count([]) > 0){
    
}
// $file = file_get_contents(__DIR__ . '/users.txt');
$handle = fopen(__DIR__ . "/data/users.txt", 'w+');

$content = "James Bond\nVictor\n";

fwrite($handle, $content);
fclose($handle);

// $users = @fopen(__DIR__ . "/customer.txt", 'r');

// while(($line = fgets($users)) !== false){
//     echo "<br>" .  $line;
// }

// fclose($users);

// echo fgets($handle);
// echo "<br>" . fgets($handle);

// $users = explode("\n", $file);
// $num = 1;

// $content = "<table><head><tr><th>SN</th><th>Name Of User</th></tr></head><tbody>";

// foreach($users as $user){
//     $content .= "<tr><td>" .$num++ . "</td><td>$user</td></tr>";
// }

// $content .= "</tbody></table>";

// echo $content;
