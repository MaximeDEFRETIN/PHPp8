<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 1</title>
    </head>
    <body>
        <?php
        print_r($_SERVER['HTTP_USER_AGENT']);
        print_r($_SERVER['REMOTE_ADDR']);
        print_r($_SERVER['SERVER_NAME']);
        ?>
    </body>
</html>