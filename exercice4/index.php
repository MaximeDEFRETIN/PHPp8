<?php
setcookie('name', $_POST['name'], time() + 365 * 24 * 3600, null, null, false, true);
setcookie('firstName', $_POST['firstName'], time() + 365 * 24 * 3600, null, null, false, true);
setcookie('age', $_POST['age'], time() + 365 * 24 * 3600, null, null, false, true);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 4</title>
    </head>
    <body>
        <form method="post" action="index.php">
            <input type="text" name="name" placeholder="Nom"/>
            <input type="text" name="firstName" placeholder="Prénom"/>
            <input type="text" name="age" placeholder="Âge"/>
            <input type="submit" value="Envoie"/>
        </form>

        <p><a href="2ndP.php">Page suivante</a></p>
    </body>
</html>