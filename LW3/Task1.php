<<<<<<< HEAD
<?php
    header("Content-Type: text/plain"); // ответ должен быть текстовым
    $text = trim($_GET['text']); // удаляет пробелы значения в начале и в конце ключа text
    while (strpos($text, '  ') != false)  // пробегает по каждому символу перменной $text и ищет двойные пробелы
     {
        $text = str_replace('  ',' ', $text); // заменяет двойной пробел на один
    }
    echo $text;
?>
=======
<?php
    header("Content-Type: text/plain");
    $text = trim($_GET['text']);
    while (strpos($text, '  ') != false)
    {
        $text = str_replace('  ',' ', $text);
    }
    echo $text;
>>>>>>> 92f4ad1fa2767b9ec5f250bc2b2d18c98f117dda
