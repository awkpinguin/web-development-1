<<<<<<< HEAD
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
=======
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
>>>>>>> 92f4ad1fa2767b9ec5f250bc2b2d18c98f117dda
?>