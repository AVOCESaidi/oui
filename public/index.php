<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ouiSaid.php" method = "post">
        <input type="text" name = "nom">
        <input type="submit" value = "Envoyer">
    </form>
    <?php
    $jour = date("d");
    $mois = date("m");
    $annee = date("Y");

    $heure = date("H");
    $minutes = date("i");
    $norheure = $heure + 1;

    echo "<h1>Bonjour ! Nous sommes le $jour/$mois/$annee et il est $norheure h $minutes.</h1>";
    
    
    $fichier = fopen("commentaire.txt", "a");
    $chaine = $_POST["nom"];
    $longueur = strlen($chaine);
    fwrite($fichier, $chaine."<br><br>");
    fclose($fichier);
    ?>
    <?php
    $fichier = fopen("commentaire.txt", "r");
    $commentaire = fread($fichier,100);
    fclose($fichier);
    echo $commentaire;
    

    ?>


</body>
</html>