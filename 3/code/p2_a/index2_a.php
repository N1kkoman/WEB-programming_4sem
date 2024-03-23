<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab3: p2.a</title>
</head>
<body>
    <div id="p2.a">
        <?php
        // Обработка формы для подсчета слов и символов
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $text = $_POST['text'];
            $wordCount = str_word_count($text);
            $charCount = strlen($text);
            echo "Количество слов: $wordCount<br>";
            echo "Количество символов: $charCount<br>";
            echo "Текст: $text";
        }
        ?>
        <form method="post">
            <textarea name="text" rows="10"></textarea>
            <button type="submit" name="count_button" value="count">Подсчитать</button>
        </form>
    </div>
</body>
</html>
