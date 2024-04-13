<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab 3: p3</title>
</head>
<body>
<div id="form">
    <form action="save.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="category">Category</label>
        <?php
        $categories = scandir('categories');

        echo '<select name="category" required>';

        foreach ($categories as $category) {
            if (is_dir("categories/$category") && $category != '.' && $category != '..') {
                echo "<option value='$category'>$category</option>";
            }
        }

        echo '</select>';
        ?>

        <label for="title">Title</label>
        <input type="text" name="title" required>

        <label for="description">Description</label>
        <textarea rows="5" name="description"></textarea>

        <input type="submit" value="Save">
    </form>

</div>

<div id="table">
    <table>
        <thead>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        <th>Email</th>
        </thead>
        <tbody>
        <?php
        // Обрабатываем объявления
        $categories = scandir('categories');
        foreach ($categories as $category) {
            if (is_dir("categories/$category") && $category != '.' && $category != '..') {
                $subcategories = scandir("categories/$category");
                // Идем по объявлениям
                foreach ($subcategories as $subcategory) {
                    if ($subcategory != '.' && $subcategory != '..') {
                        $filePath = "categories/$category/$subcategory";
                        $fp = fopen($filePath, 'r');
                        $desc = "";
                        $email = "";
                        while ($line = fgets($fp)) {
                            if (filter_var($line, FILTER_VALIDATE_EMAIL)) {
                                $email = $line;
                            } else {
                                $desc .= $line;
                            }
                        }
                        fclose($fp);

                        // Формируем строку объявления
                        echo '<tr>';
                        echo "<td>$category</td>";
                        // удаляем последние 4 символа (.txt)
                        echo "<td>".substr($subcategory, 0, strlen($subcategory) - 4)."</td>";
                        echo "<td>$desc</td>";
                        echo "<td>$email</td>";
                        echo '</tr>';
                    }
                }
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>