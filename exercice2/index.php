<?php
session_start();
$_SESSION['firstName'] = 'Jean';
$_SESSION['name'] = 'Dupont';
$_SESSION['age'] = 24;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 2</title>
    </head>
    <body>
        <a href="2ndP.php">Bouton</a>
        <?php
        
        ?>
    </body>
</html>