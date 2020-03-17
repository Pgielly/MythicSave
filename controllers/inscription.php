<?php

$name=strtolower($_POST['name']);
$password= md5($_POST['password']);
$description=$_POST['description'];


$bdd = new PDO('mysql:host=localhost;dbname=Mythic;charset=utf8', 'root', '0000');

$sth = $bdd->prepare("INSERT INTO users( name ,password ,description) VALUES ( :name, :password, :description)");
$sth->bindParam(':name', $name);
$sth->bindParam(':password', $password);
$sth->bindParam(':description', $description);
$sth->execute();

header('Location : /users.php');

