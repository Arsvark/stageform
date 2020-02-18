<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css"/>

    <title>creation facture</title>
</head>
<body>
    
        <h1><a href="stagefact1.php">Bienvenue sur le site de facturation</a></h1>
        <?php include ('menu.php'); ?>

        <form action="rendu.php" method="post">
            <p>
                <label for ="nom">Nom</label> : 
                    <input type="text" name="nom" id="nom">
                
            <br>
            <br>

            
            <label for ="Adresse">Adresse</label> : 
                    <input type="text" name="adresse" id="adresse">
            
            <br>
            <br>

                    <label for ="choix">Type de facturation</label> : 
                    <select id="choix" name="choix">
                        <option value="elec">Forfait Electrique</option>
                        <option value="surface">Terrain </option>
                    </select>       
            <br>
            <br>
            
            <label for ="datation"><span>Durée :</span></label>
            <em>(en jour)</em>
                    <input type="text" name="datation" id="datation">
            
            <br>
            <br>
            <label for ="taille"><span>Superficie</span></label>
            <em>(si terrain et en M²)</em>
                    <input type="text" name="taille" id="taille">
            
            <br>
            <br>

            
                <input type="submit" value="valider">
                <input type="reset" value="Annuler">
                
                </p>


        </form>


</body>
</html>