<?php

// EXERCICE 1

function calculerAge($annee) {
    $Anneeactuelle = 2025;
    return $Anneeactuelle - $annee;
}


$anneeNaissance = 2000; // Remplacez par l'année de naissance souhaitée$

echo "Votre age est de " . calculerAge($anneeNaissance) . " ans en 2025.";

echo "<br>";
echo "<br>";


// EXERCICE 2


$mot_de_passe = "4Cheikhtidiane"; // Remplacez par le mot de passe à vérifier

if (strlen($mot_de_passe) < 8) {
    echo "Le mot de passe doit contenir au moins 8 caractères.<br>";
}

elseif (!preg_match('/[A-Z]/', $mot_de_passe)) {
   echo "Le mot de passe doit contenir au moins une lettre majuscule.<br>";
}

elseif (!preg_match('/[0-9]/', $mot_de_passe)) {
    echo "Le mot de passe doit contenir au moins un chiffre.<br>";
}
else{
    echo "Le mot de passe est valide.";
}
echo "<br>";
echo "<br>";

// EXERCICE 3

$nombre = 7;      // Remplacez par le nombre souhaité

echo "Table de multiplication de $nombre :<br>";

for ($i = 1; $i <= 10; $i++) {
    $resultat = $nombre * $i;
    echo "$nombre x $i = $resultat<br>";
}



// EXERCICE 4

$a = 1000; 
$b = 0;  
$operateur = '/'; // Definir l'opérateur 

// Calcul et affichage du résultat
if ($operateur == '+') {
    echo "La somme de ". $a . " et ". $b . " est de "  . ($a + $b);
} 
elseif ($operateur == '-') {
    echo "La difference de ". $a . " et ". $b . " est de "  . ($a - $b);
} 
elseif ($operateur == '*') {
    echo "Le produit de ". $a . " et ". $b . " est de "  . ($a * $b);
} 
elseif ($operateur == '/' ) {
    if( $b != 0){
        echo "La quotient de ". $a . " et ". $b . " est de "  . ($a / $b);}
    else{
    echo "Division par zéro n'est pas valide !!!!!!" ;}}
else {
     echo "L'opérateur n'est pas valide.";

}



?>






