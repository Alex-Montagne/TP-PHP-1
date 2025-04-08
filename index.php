<?php

#Exercice 1 

$jour = date('l');

switch($jour){
    case "Monday": 
        echo  "Aujourd'hui c'est lundi.";
        break;
    case "Tuesday":
        echo "Aujourd'hui c'est mardi.";
        break;
    case "Wednesday":
        echo "Aujourd'hui c'est mercredi.";
        break;
    case "Thursday":
        echo "Aujourd'hui c'est jeudi.";
        break;
    case "Friday":
        echo "Aujourd'hui c'est vendredi.";
        break;
    case "Saturday":
        echo "Aujourd'hui c'est samedi.";
        break;
    case "Sunday":
        echo "Aujourd'hui c'est dimanche.";
        break;
}

#Exercice 2

$note = 17;

switch($note){
    case $note>=18:
        $appreciation = "Excellent (A+)";
        break;
    case $note>=16:
        $appreciation = "Très bien (A)";
        break;
    case $note>=14:
        $appreciation = "Bien";
        break;
    case $note>=12:
        $appreciation = "Assez bien";
        break;
    case $note>=10:
        $appreciation = "Passable";
        break;
}

echo "Note:".$note."/20-".$appreciation;