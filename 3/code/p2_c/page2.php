<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="person">
        <h2>Данные пользователя:</h2>
            <?php
            function redirectToHome(): void
            {
                header('Location: /index_2c.php');
                exit();
            }

            if (false === isset($_SESSION["userData"]))
            {
                redirectToHome();
            }
            echo "<ul>";
            foreach ($_SESSION["userData"] as $key => $value) {
                echo "<li><strong>$key:</strong> $value</li>";
            }
            echo "</ul>";
            ?>
    </div>
</body>
</html>