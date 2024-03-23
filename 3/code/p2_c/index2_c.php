<?php
session_start();

if ("POST" === $_SERVER["REQUEST_METHOD"]) {
    $_SESSION["userData"] = array(
        "name" => $_POST["name"],
        "age" => $_POST["age"],
        "salary" => $_POST["salary"],
        "other" => $_POST["other"]
    );
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab3: p2.с</title>
</head>
<body>
<div id="person">
    <form method="post">
        <label>Имя: <input type="text" name="name"></label><br>
        <label>Возраст: <input type="number" name="age"></label><br>
        <label>Зарплата: <input type="number" name="salary"></label><br>
        <label>Дополнительная информация: <input type="text" name="other"></label><br>
        <button type="submit">Сохранить</button>
    </form>

    <br>
    <a href="page2.php"><button>Перейти на другую страницу</button></a>
</div>
</body>
</html>