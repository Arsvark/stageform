<?php
session_start();

$log = $_SESSION['login'];

if($log == NULL){
        header('location: connet.php');
}
else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="main.css"/>

    <title>rendu</title>
</head>
<body>
    
        <h1><a href="stagefact1.php">Bienvenue sur le site de facturation</a></h1>
        <?php include ('menu.php'); ?>

<p>
<?php

$nom = $_POST['nom'];
$adresse = $_POST["adresse"] ;
$choix = $_POST["choix"] ;
$datation= $_POST["datation"] ;
$taille= $_POST["taille"];

?>

Facture N°XXXXXXX <br>

Nom : <?php echo "$nom"; ?> <br>
Lieu : <?php echo "$adresse"; ?> <br>

<?php 

if ($choix === "elec" ){
            $fact="facture électrique";
            $prix=($datation*1.9013);
}
elseif ($choix== "surface"){
            $fact="facture de terrain";
            $prix=($taille*$datation * 3.654);
}

else{
    $prix = 0;
}
?>

votre total de <?php echo"$fact"; ?> est de <?php echo "$prix"; ?> eur.o<br>


</p>
</body>
<?php
}
?>
</html>
