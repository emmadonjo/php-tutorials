<?php

    $name = '';

    // t
    echo isset($name) ? $name : '';

   $method = $_SERVER['REQUEST_METHOD'];

   if($method == 'POST'){

        $error = '';
        $image = $_FILES['photo'];
        // print_r($image);

        $allowed_size = 2 * 1024 * 1024;
        $permitted_types = [
            'image/jpeg', 'image/jpg', 'image/png', 'image/gif'
        ];

        if($image['size'] > $allowed_size){
            $error = 'The photo is larger than the permitted size of 2MB.';
        }

        if(!in_array($image['type'], $permitted_types)){
            $error = 'The photo type is invalid.';
        }

        if(empty($error)){
        $pos = strrpos($image['name'], '.');
        $ext = substr($image['name'], $pos);

        $to = __DIR__ . '/photos/' . 'josh' . $ext;
        // $to = __DIR__ . '/photos/' . $image['name'];
        // validate image
            $move = move_uploaded_file($image['tmp_name'],  $to);   
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <div>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div>
                <label for="photo">Upload photo</label>
                <br>
                <input type="file" name="photo" id="photo" required >
            </div>

            <div>
                <button type="submit">Upload</button>
            </div>
            <div>
                <?=isset($error) ? $error : ''?>
            </div>
        </form>
    </div>        
</body>
</html>