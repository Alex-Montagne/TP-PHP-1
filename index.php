<?php

try {
    $mysqlClient = new PDO('mysql:host=localhost;dbname=BDD;charset=utf8', 'root', '');
} catch (Exception $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

#Exercice 1

$sqlQuery = 'INSERT INTO users (username, password,age) VALUES ("Martin", 1234,30)';
$usersStatement = $mysqlClient->prepare($sqlQuery);
$usersStatement->execute();

echo "Nouvel utilisateur inséré ave l'ID: ".$mysqlClient->lastInsertId()."\n";

#Exercice 2

$sqlQuery = 'INSERT INTO users (username, password,age) VALUES ("Luc", 2468,42)';
$usersStatement = $mysqlClient->prepare($sqlQuery);
$usersStatement->execute();

$sqlQuery = 'SELECT * FROM users WHERE age > 30';
$usersStatement = $mysqlClient->prepare($sqlQuery);
$usersStatement->execute();

$users = $usersStatement->fetchAll(PDO::FETCH_ASSOC);

echo "Utilisateurs de plus de 30 ans : \n";
foreach ($users as $user) {
    echo "Nom: ".$user['username']." - Age: ".$user['age']."\n";
}

#Exercice 3

$sqlQuery = "UPDATE users SET age = 31 WHERE id = 1";
$usersStatement = $mysqlClient->prepare($sqlQuery);
$usersStatement->execute();

echo "Nombre d'utilisateurs mis à jour: ".$usersStatement->rowCount()."\n";

#Exercice 4

$sqlQuery = "DELETE FROM users WHERE id = 2";
$usersStatement = $mysqlClient->prepare($sqlQuery);
$usersStatement->execute();

echo "Nombre d'utilisateurs supprimés: ".$usersStatement->rowCount()."\n";