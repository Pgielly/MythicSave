<?php
///// DELETE

$user['id'] = $_POST['id'];

$bdd = new PDO('mysql:host=localhost;dbname=Mythic;charset=utf8', 'root', '0000');

$sth = $bdd->prepare("DELETE FROM users WHERE id = :id");
$sth->bindParam(':id', $user['id']); 
$users = $sth->fetchAll(PDO::FETCH_ASSOC);
$sth->execute();

header('Location: /users.php');