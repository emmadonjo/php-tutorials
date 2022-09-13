<?php
    $users = [];
    $count = 1;
    try{
        $get_users = fopen(__DIR__ . '/data/users.txt', 'r');
        
        while(($user = fgets($get_users)) !== false){
            $users[] = explode('|', $user);
        }
        fclose($get_users);
    }catch(\Exception $e){
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
        <form action="/handle-users.php" method="POST">
            <div>
                <label for="firstname">Firstname</label>
                <br>
                <input type="text" name="firstname" maxlength="64" minlength="2" placeholder="Enter Firstname" id="firstname" required >
            </div>

            <div>
                <label for="lastname">Lastname</label>
                <br>
                <input type="text" name="lastname" maxlength="64" minlength="2" placeholder="Enter lastname" id="lastname" required >
            </div>

            <div>
                <button type="submit">Add User</button>
            </div>
        </form>
    </div>

    <div>
        <?php if(count($users) > 0){?>
            <table>
                <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user){?>
                        <tr>
                            <th scope="row"><?=$count++?></th>
                            <td><?=$user[0]?></td>
                            <td><?=$user[1]?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        <?php }else {?>
            <div>No user was found</div>
        <?php } ?>
    </div>
</body>
</html>