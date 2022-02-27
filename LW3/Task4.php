<?php
    header("Content-Type: text/plain");
    $email = trim($_GET['email']);
    $firstName = trim($_GET['first_name']);
    $lastName = trim($_GET['last_name']);
    $age = trim($_GET['age']);

    if(file_exists($email . '.txt'))
    {
        fopen($email . '.txt', 'w');
    }
    else
    {
        $user = fopen($email . '.txt', 'w');
        $text = $firstName . PHP_EOL . $lastName;
        fwrite($user, $text);
        fclose($user);
    }




    echo $email, PHP_EOL;
    echo $firstName, PHP_EOL;
    echo $lastName, PHP_EOL;
    echo $age, PHP_EOL;
?>