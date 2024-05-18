<?php
require_once 'config.php';

// Подключение к базе данных
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($mysqli->connect_error) {
    die("Ошибка подключения к базе данных: " . $mysqli->connect_error);
}

// Получение данных из формы
$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

// Сохранение данных в базе данных
$stmt = $mysqli->prepare("INSERT INTO web.ad (email, category, title, description) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $email, $category, $title, $description);
$stmt->execute();

// Закрытие соединения с базой данных
$stmt->close();
$mysqli->close();

// Перенаправление на index.php
header("Location: index4.php");
exit;