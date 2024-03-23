<?php
function redirectToHome(): void
{
    header('Location: /');
    exit();
}

session_start();

if (false === isset($_SESSION["firstname"], $_SESSION["lastname"], $_SESSION["age"]))
{
    redirectToHome();
}

$first_name = $_SESSION["firstname"];
$second_name = $_SESSION["lastname"];
$age = $_SESSION["age"];

echo "Пользователь $first_name $second_name ($age)";

