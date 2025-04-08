<?php

#Exercice 1 

$fruits = ["pomme", "banane", "orange", "fraise", "kiwi"];

foreach($fruits as $fruit){
    echo $fruit."\n";
}

#Exercice 2

$personne = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 30,
    "ville" => "Paris"
];

foreach($personne as $cle => $valeur){
    echo $cle.": ".$valeur."\n";
}

#Exercice 3

$etudiants = [
    ["nom" => "Martin", "note" => 15],
    ["nom" => "Durand", "note" => 12],
    ["nom" => "Petit", "note" => 18]
];

foreach($etudiants as $x => $ligne){
    foreach($ligne as $y => $valeur){
        echo $valeur." ";
    }
    echo "\n";
}