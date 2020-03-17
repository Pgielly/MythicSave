<?php
session_start();

$user['id'] = $_POST['id'];
$user['name'] = strtolower($_POST['name']);
$user['description']= $_POST['description'];

$bdd = new PDO('mysql:host=localhost;dbname=Mythic;charset=utf8', 'root', '0000');

$sth = $bdd->prepare("UPDATE users SET name=:name, description=:description WHERE id=:id");
$sth->bindParam(':name', $user['name'] );
$sth->bindParam(':description', $user['description']); 
$sth->bindParam(':id', $user['id']);
$sth->execute();

header('Location: ../users.php');