<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Todo</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="/">Todos</a></li>
                <li><a href="/add-todo.php">Add Todo</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Add Todo</h1>

        <form action="/todo.php" method="POST">
            <input type="text" name="title" required maxlength="60"/>

            <textarea name="desc" maxlength="200" rows="5"></textarea>

            <button type="submit">Add Todo</button>
        </form>
    </main>
</body>
</html>