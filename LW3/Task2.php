<?php
    header("Content-Type: text/plain");
    $answer = 'No';
    $text = trim($_GET['ident']);

    foreach ($text as $bestText)
    {
        if(is_numeric($bestText[0]))
        {
            return;
        }

        if(ctype_alpha($bestText))
        {
            $answer = 'Yes';
            return;
        }
        else
        {
            if(is_numeric($bestText))
            {
                $answer = 'No';
                echo 'Так как идентификатор не может начинаться с цифры, а введены ВСЕ цифры';
                return;
            }
        }
    }

    echo $answer;
?>