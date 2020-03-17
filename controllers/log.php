<?php 

$connectUser = $_POST['name'];
$connectPassword = md5($_POST['password']);

$bdd = new PDO('mysql:host=localhost;dbname=Mythic;charset=utf8', 'root', '0000');
$sth = $bdd->prepare("SELECT * FROM users");
$sth->execute();
$users=$sth->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
    if ($connectUser == $user['name'] && $user['password'] == $connectPassword) {
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = ucfirst($user['name']);
        $_SESSION['preferences']['image'] = $user['prefImage'];
        $_SESSION['preferences']['text'] = $user['prefDescription'];
        header('Location: /index.php'); die;
    }
}
header('Location: ../login.php');