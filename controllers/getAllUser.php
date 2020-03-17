<?php
session_start();

// Système de connection à la Base De Donnée
$bdd = new PDO('mysql:host=localhost;dbname=Mythic;charset=utf8', 'root', '0000');

// Prépare la requête
$sth = $bdd->prepare('SELECT * FROM users');
$sth->execute();

//Récuperer les infos de la BDD dans une variable
$users = $sth->fetchAll(PDO::FETCH_ASSOC);


