<?php

$recette_test = [
    "titre" => "desserts 1",
    "image" => "../img/dessert1.jpg",
    "temps" => "2h",
    "personnes" => "4",
    "dificulté" => "3/4",
    "cout" => "3/4",
    "ingredient" => "1 paquet de pâtes de lasagnes /// 3 oignons jaunes /// 3 gousses d'ail /// 1 branche de céleri /// 1 carotte /// etc",
    "etape" => "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive. /// Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout. /// Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation.",


]

$size = sizeof($recette_test)

$titre = "";
$image = "";
$temps = "";
$personnes = "";
$dificulté = "";
$cout = "";
$ingredient ="";
$etape ="";

for ($i == 0 ; $i < $size ; $i++) {
    
    $titre = "";
    $image = "";
    $temps = "";
    $personnes = "";
    $dificult = "";
    $cout = ""; 
    $ingredient = "";
    $etape = ""; 
}*/

   












?>



<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Mon livre de recettes</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

<body>
    <h1><?= $recettes_test["titre"] ?>
    <table>
        <tr>
        <th>Temps de preparation </th>
        <th>Personnes</th>
        <th>Difficulté</th>
        <th>Coût</th>
        </tr>
        <tr>
        <td><?= $recettes_test["temps"] ?></td>
        <td><?= $recettes_test["personnes"] ?></td>
        <td><?= $recettes_test["dificulte"] ?></td>
        <td><?= $recettes_test["cout"] ?></td>
        
        </tr>
        </table>
</body>

</html>