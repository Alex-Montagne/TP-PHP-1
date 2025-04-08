<?php

#Exercice 1

for ($i = 1; $i <= 10; $i++){
    echo $i;
}

#Exercice 2

for ($i = 1, $j = 0; $i <= 100; $j += $i, $i++);
echo $j;

#Exercice 3

for ($i = 1; $i <= 10; $i++){
    for ($j = 1; $j <= 10; $j++){
        echo $i." x ".$j." = ".$i*$j."\n";
    }
    echo "\n";
}