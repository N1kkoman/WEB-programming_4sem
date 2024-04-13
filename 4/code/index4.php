<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab 4</title>
</head>
<body>
<div id="form">
    <form action="save.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="category">Category</label>
        <select name="category" required>
            <option value="electronics">Electronics</option>
            <option value="clothing">Clothing</option>
            <option value="books">Books</option>
            <option value="furniture">Furniture</option>
            <option value="other">Other</option>
        </select>

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
        <tr>
            <th>Category</th>
            <th>Title</th>
            <th>Description</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Чтение данных из Google Sheets
        $id = '1lgdbNrM_GBucnOlqAEZPZ78QqpyA-MVxMiXKZYL_eso';
        $gid = 0;
        $csv = file_get_contents('https://docs.google.com/spreadsheets/d/' . $id . '/export?format=csv&gid=' . $gid);
        $csv = explode("\r\n", $csv);
        $array = array_map('str_getcsv', $csv);

        // Вывод объявлений на сайте
        $html = '';
        foreach ($array as $row) {
            $html .= '<tr>';
            $html .= '<td>' . $row[0] . '</td>';
            $html .= '<td>' . $row[1] . '</td>';
            $html .= '<td>' . $row[2] . '</td>';
            $html .= '<td>' . $row[3] . '</td>';
            $html .= '</tr>';
        }

        echo $html;
        ?>
        </tbody>
    </table>
</div>
</body>
</html>