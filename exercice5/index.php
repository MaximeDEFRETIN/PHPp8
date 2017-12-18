<?php
if (isset($_POST['pseudo']) && isset($_POST['password']))
{
    setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', null, false, true);
    setcookie('firstName', $_POST['password'], time() + 365 * 24 * 3600, '/', null, false, true);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 5</title>
    </head>
    <body>
        <form method="post" action="index.php">
            <input type="text" name="login" placeholder="Login"/>
            <input type="password" name="password" placeholder="Mot de passe"/>
            <input type="submit" value="Envoie"/>
        </form>
        <?php
        echo 'Login : ' . htmlspecialchars($_COOKIE['login']) . ' Mot de passe : ' . htmlspecialchars($_COOKIE['password']) . '.';
        ?>
    </body>
</html>