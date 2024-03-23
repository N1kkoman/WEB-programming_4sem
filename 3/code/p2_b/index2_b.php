<?php
session_start();

if ("POST" === $_SERVER["REQUEST_METHOD"]) {
    $_SESSION["lastname"] = $_POST["lastname"];
    $_SESSION["firstname"] = $_POST["firstname"];
    $_SESSION["age"] = $_POST["age"];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab3: p2.b</title>
</head>
<body>
<div id="person">
    <form method="post">
        <label>Фамилия: <input type="text" name="lastname"></label><br>
        <label>Имя: <input type="text" name="firstname"></label><br>
        <label>Возраст: <input type="number" name="age"></label><br>
        <button type="submit">Сохранить</button>
    </form>

    <br>
    <a href="page2.php"><button>Перейти на другую страницу</button></a>
</div>
</body>
</html>