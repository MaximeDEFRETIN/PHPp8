<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 2 a</title>
    </head>
    <body>
        <p>Bienvenue <?php echo $_SESSION['firstName'] . '  '  . $_SESSION['name'] . '. Tu as  '  . $_SESSION['age'] . ' ans.'; ?></p>
    </body>
</html>