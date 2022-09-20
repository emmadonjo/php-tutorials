<?php

// function formatNum(string $num){
//     if(str_starts_with($num, '234') && strlen($num) == 13){
//         return '+' . $num;
//     }

//     if(str_starts_with($num, '0') && strlen($num) == 11){
//         return '+234' . substr($num, 1);
//     }
//     return $num;
// }
//     $method = $_SERVER['REQUEST_METHOD'];

//     $contacts = [];

//     if($method == 'POST'){
//         $uploaded = $_FILES['contacts'];

//         $file = fopen($uploaded['tmp_name'], 'r');
//             while(!feof($file)){

//                 $line = fgets($file);

//                 if(!empty(trim($line))){
//                     $data = explode('|', $line);
//                     // echo formatNum($data[1]);

//                     // format numbers to +234
//                     array_push($contacts,  [$data[0], formatNum(trim($data[1]))]);
//                 }
//             }
//         fclose($file);
//     }
    // print_r($contacts);

    
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
                <label for="contacts">Upload Contacts</label>
                <br>
                <input type="file" name="contacts" id="contacts" required >
            </div>

            <div>
                <button type="submit">Upload</button>
            </div>
        </form>
    </div>

    <div>
        <?php if(count($contacts) > 0){?>
            <table>
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contacts as $key => $contact){?>
                        <tr>
                            <th scope="row"><?=$key + 1?></th>
                            <td><?=$contact[0]?></td>
                            <td><?=$contact[1]?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        <?php }else {?>
            <div>The file does not contain any contact.</div>
        <?php } ?>
    </div>
</body>
</html>