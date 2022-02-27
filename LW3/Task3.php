<?php
    header("Content-Type: text/plain");
    $text = trim($_GET['password']);

    $countNum = $countChar = $countUpReg = $countDownReg = 0;   

    $len = iconv_strlen($text); // считает количество символов
    $arrFromText = str_split($text); // разбивает исходный текст на массив символов

    foreach($arrFromText as $newArrText)
    {
        if(is_numeric($newArrText)) 
        {
            $countNum++;
        }
        else 
        {
            $countChar++;

            if(ctype_upper($newArrText)) 
            {
                $countUpReg++;
            }
            else 
            {
                $countDownReg++;
            }
        }
    }

    foreach(count_chars($text, 1) as $i => $value)
    {
        if($value > 1) 
        {
            $countReplay += $value;
        }
    }

    echo 'Уровень надежности пароля: ' . getSafetyLevel($len, $countNum, $countChar, $countUpReg, $countDownReg, $countReplay);

    function getSafetyLevel($len, $countNum, $countChar, $countUpReg, $countDownReg, $countReplay): ?int
    {
        if($len != 0) 
        {
            $safety += 4 * $len;

            if($countChar != 0)
            {
                if($countNum != 0)
                {
                    $safety += 4 * $countNum;
                }
                else
                {
                    $safety -= $len;
                }

                if($countDownReg != 0)
                {
                    $safety += ($len - $countDownReg) * 2;
                }

                if($countUpReg != 0)
                {
                    $safety += ($len - $countUpReg) * 2;
                }
            }
            else
            {
                $safety += 4 * $countNum;
                $safety -= $len;
            }

            if($countReplay != 0)
            {
                $safety -= $countReplay;
            }

            return $safety;

        } 
        else
        {
            return 0;
        }
    }
?>