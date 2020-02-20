<!-- stagefact1.php -->

<?php

session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css"/>

    <title>Schema fact</title>


</head>
<body>
<h1><a href="stagefact1.php">Bienvenue sur le site de facturation</a></h1>

<?php
if ( isset($_SESSION['login']) && isset($_SESSION['$password'])) {

    echo 'Bonjour '.$_SESSION['login'].'voici le '.$_SESSION['password'].'.';

    echo'<a href="out.php">Deconnexion</a>';

}
else {

?>

    <nav>
            <form class="login" action="valid.php" method="POST">
                <input name="login" placeholder="login" type="text"><br>
                <input name="password" placeholder="mot de passe" type="text">
                <input class="submit" type="submit" value="Envoi">
            </form>
    </nav>


    
<?php 
}

include ('menu.php'); ?>

<p> 

<?php

echo 'Bonjour '.$_SESSION['login'].'voici le '.$_SESSION['password'].'.';

echo'<a href="out.php">Deconnexion</a>';

?>


<footer>
    <p>© Mentions Légales</p>
</footer>
</body>
</html>