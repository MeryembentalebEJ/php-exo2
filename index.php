<!--======================================= Exo part 1  ===================================-->


<?php
// exo 1
$name = 'Meryem';
echo "Hello " . $name;

// exo 2 + exo 3 (age)
$firstName = "Meryem";
$lastName = "Bentaleb";
$age = 31;

echo "<br> <br>"; 
echo "Je m'appelle " . $firstName. ' ' .$lastName. ' j\' ai ' .$age. ' ans.'; 

echo "<br> <br>"; 
if ($age >= 18){
    echo "Tu es majeur <br>";
}else{
    echo "Tu es mineur <br>";
}





//============================ exo 4  ==========================
// random age instead of Math.random js we use rand() in php
$randomAge = rand(0,100);
echo "<br> <br>"; 
if ($randomAge >= 18){
    echo $randomAge." Tu es majeur <br>";
}else{
    echo $randomAge." Tu es mineur <br>";
}






//=============================== Exo 5 =============================

// Trois type de tableaux. 1 numéroté/ 2 associatif/ 3 multidimontionnel
echo "<br> <br>"; 
$genre = array(
    "Un homme",
    "Une femme",
);
// Method: array_rand fait le random sur le key du tableau
$key = array_rand(
    $genre
);
echo "Vous êtes ". $genre [$key] . " et vous avez ". $randomAge." ans.<br>";

echo "<br> <br>"; 
$magnitud = rand(1,9);
switch ($magnitud){
    case 1:
        echo $magnitud."Micro-séisme impossible à ressentir.";
        break;
    case 2:
        echo $magnitud."Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
    case 3:
        echo $magnitud."Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
    case 4:
        echo $magnitud."Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        break;
    case 5:
        echo $magnitud."Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts deconstruction. Peu de dégats sur des bâtiments modernes.";
        break;
    case 6:
        echo $magnitud."Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        break;
    case 7:
        echo $magnitud."Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
    case 8:
        echo $magnitud."Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
    case 9:
        echo $magnitud."Séisme capable de tout détruire sur une très vaste zone.";
        break;
    
}
?>









<!--====================================== exo part 4 ==================================-->



