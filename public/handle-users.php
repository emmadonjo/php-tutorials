<?php

$method = $_SERVER['REQUEST_METHOD'];

if($method != 'POST'){
    header('Location: files.php');
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$message = '';

// validation

try{
    $users = fopen(__DIR__ . '/data/users.txt', 'a+');

    $content = "$firstname|$lastname\n";
    fwrite($users, $content);

    fclose($users);
    header('Location: files.php');
}
catch(\Exception $e){
    $message = 'An error occurred!';
    header('Location: files.php');
}
