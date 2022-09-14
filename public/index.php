<?php 

// function extractFile($file)
// {
//     while(!feof($file)){
//         $line = fgets($file);
    
//         // checks if row is not empty
//         if(!empty(trim($line))){
//            yield $line;
//         }
//     }

// fclose($file)
// }
// if(count([]) > 0){
    
// }
// $file = file_get_contents('https://kc.kobotoolbox.org/media/original?media_file=pwfoyo%2Fattachments%2F547b37bfadc140c188add585d0cdedf1%2F113bd6d0-0789-4bf2-b75f-adf93c131eb9%2F1662474743369.jpg');

// echo $file;

$file = fopen(__DIR__ . '/data/users.txt', 'r');

// $contents = iterator_to_array(extractFile($file));

// print_r($contents);

while(!feof($file)){
    $line = fgets($file);

    // checks if row is not empty
    if(!empty(trim($line))){
        echo $line;
    }
    // echo ftell($file) . "\n";
    // fseek($file, ftell($file));

    if(ftell($file) >= 15){
        break;
    }

    // if(feof($file)){
    //     rewind($file);
    // }
}
// $size = filesize(__DIR__ . '/data/users.txt');

// echo $size . "\n";

// $read = fread($file, $size);
// $data = explode("\n", $read);

// foreach($data as $user){
//     echo str_replace("|", "-", $user) . "\n";
// }
// echo $read;


// $handle = fopen(__DIR__ . "/data/users.txt", 'w+');

// $content = "James Bond\nVictor\n";

// fwrite($handle, $content);
// fclose($handle);

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
