<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 4 a</title>
    </head>
    <body>
        <?php
        echo $_COOKIE['name'] . ' ';
        echo $_COOKIE['firstName'] . ' ';
        echo $_COOKIE['age'] . ' ';
        ?>
    </body>
</html>