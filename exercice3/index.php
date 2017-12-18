<?php
session_start();

setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, null, null, false, true);
setcookie('firstName', $_POST['password'], time() + 365 * 24 * 3600, null, null, false, true);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 3</title>
    </head>
    <body>
        <form method="post" action="index.php">
            <input type="text" name="login" placeholder="Login"/>
            <input type="password" name="password" placeholder="Mot de passe"/>
            <input type="submit" value="Envoie"/>
        </form>
        <?php
        if (isset($_POST['login']) && isset($_POST['firstName']) && isset($_POST['age'])){
            echo 'Login : ' . $_COOKIE['login'] . ' Mot de passe : ' . $_COOKIE['password'] . '.';
        }
        else{
            echo 'Rentre des valeurs';
        }
        ?>
    </body>
</html>