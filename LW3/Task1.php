<?php
    header("Content-Type: text/plain"); // ответ должен быть текстовым
    $text = trim($_GET['text']); // удаляет пробелы значения в начале и в конце ключа text
    while (strpos($text, '  ') != false)  // пробегает по каждому символу перменной $text и ищет двойные пробелы
     {
        $text = str_replace('  ',' ', $text); // заменяет двойной пробел на один
    }
    echo $text;
?>