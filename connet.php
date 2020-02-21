<?php
session_start();
session_unset();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css"/>
    <title>Connexion test</title>
</head>
<body>
    <h1 ><a href="connet.php">Bienvenue sur le site de facturation</a></h1>

    <nav>
            <form class="login" action="valid.php" method="POST">
                <input name="login" placeholder="login" type="text"><br>
                <input name="password" placeholder="mot de passe" type="text">
                <input class="submit" type="submit" value="Envoi">
            </form>
    </nav>


<footer>
    <p>© Mentions Légales</p>
</footer>
</body>
</html>