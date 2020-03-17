<?php 
session_start();
$_SESSION['preferences']['image'] = $_POST['image'];
$_SESSION['preferences']['text'] = $_POST['text'];

// var_dump($_POST);

$bdd = new PDO('mysql:host=localhost;dbname=Mythic;charset=utf8', 'root', '0000');
$sth = $bdd->prepare("UPDATE users SET prefImage=:prefImage, prefDescription=:prefDescription WHERE id=:id");
$sth->bindParam(':prefImage', $_SESSION['preferences']['image'] );
$sth->bindParam(':prefDescription', $_SESSION['preferences']['text']); 
$sth->bindParam(':id', $_SESSION['id']); 

$sth->execute();
$users=$sth->fetchAll(PDO::FETCH_ASSOC);
// var_dump($users);



header('Location: /');