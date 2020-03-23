<?php

$recette_test = {
    "titre" => "desserts 1",
    "image" => "../img/dessert1.jpg",
    "temps" => "2h",
    "personnes" => "4",
    "dificulté" => "3/4",
    "cout" => "3/4",
    "ingredient" => "1 paquet de pâtes de lasagnes /// 3 oignons jaunes /// 3 gousses d'ail /// 1 branche de céleri /// 1 carotte /// etc",
    "etape" => "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive. /// Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout. /// Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation.",


}

$size = sizeof($recette_test)

$titre = "";
$image = "";
$temps = "";
$personnes = "";
$dificulté = "";
$cout = "";
$ingredient ="";
$etape ="";

   $titre= $recette_test["titre"];
   $image= $image["image"];
   $temps= $temps["temps"];
   $personnes= $personnes["personnes"];
   $dificulté= $dificulté["dificulté"];
   $cout= $cout["cout"];
   $ingredient= $ingredient["ingredient"];
   $etape= $etape["etape"];
   












?>



<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>desserts1</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
    <h1><?php echo $recette_test["titre"]?></h1>

    







</html>