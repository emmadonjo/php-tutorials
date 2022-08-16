<?php
    $usernames = [];

    if(isset($_POST['name'])){
        $user = $_POST['name'];

        $usernames[] = $user;
    }

?>

<!Doctype html>
<html lang="en-gb">
    <head>
        <title>List of Users</title>
        <meta charset="utf-8" />
        <style>
            body{
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <h1>List of users</h1>
        <form method="POST">
            <input type="text" name="name" required />
            <button type="submit" title="Submit">Add Username</button>
        </form>

        <div>
            <h2>Users</h2>
            <ul>
                <?php 
                    foreach($usernames as $user){
                        echo '<li>' . $user .'</li>';
                    }
                ?>
            </ul>
        </div>
    </body>
</html>