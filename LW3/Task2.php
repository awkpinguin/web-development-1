<?php
    header("Content-Type: text/plain");
    $text = trim($_GET['identifier']);
    $arrayText = str_split($text);
    $answer = 'Не введен ключ identifier или не присвоено значение ключу';

    if($text = trim($_GET['identifier']))
    {
        if(ctype_alpha($text))
        {
            $answer = 'Yes';
            echo 'Так как идентификатор состоит полностью из буквенных символом: ';
        }
        else
        {
            if(is_numeric($arrayText[0]))
            {
                $answer = 'No';
                echo 'Так как идентификатор не может начинаться с цифры: ';
            }
            else
            {
                $answer = 'Yes';
                echo 'Идентификатор не может начинаться с цифры, НО содержать в себе цифры может, поэтому: ';
            }
        }
    }

    echo $answer . '.';