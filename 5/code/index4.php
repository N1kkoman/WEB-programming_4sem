<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab 5</title>
</head>
<body>
<div id="form">
    <form action="save.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="category">Category</label>
        <select name="category" id="category" required>
            <option value="electronics">Electronics</option>
            <option value="clothing">Clothing</option>
            <option value="books">Books</option>
            <option value="furniture">Furniture</option>
            <option value="other">Other</option>
        </select>

        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>

        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5"></textarea>

        <input type="submit" value="Save">
    </form>
</div>

<div id="table">
    <table>
        <thead>
        <tr>
            <th>Category</th>
            <th>Title</th>
            <th>Description</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'config.php';

        // Подключение к базе данных
        $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
        if ($connection->connect_error) {
            die("Ошибка подключения к базе данных: " . $connection->connect_error);
        }

        // Выборка объявлений из базы данных
        $result = $connection->query("SELECT * FROM web.ad");

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }

        // Закрытие соединения с базой данных
        $connection->close();
        ?>
        </tbody>
    </table>
</div>
</body>
</html>