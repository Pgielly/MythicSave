<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/profil.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="icon" type="image/png" href="img/game.png" />
    <title>Mythic | Profil</title>
</head>
<body>
    <?php include_once 'templates/header.php' ?>
    <main class="flex">
        <h1>Préférences</h1>
        <?php if(isset($_SESSION['name'])): ?>
        <form action="controllers/preferences.php" method="POST">
            <div class='margin'>
                <p>Afficher le texte : </p>
                <input type="radio" name="text" value="on" <?= ($_SESSION['preferences']['text'] == 'on') ? 'checked': '' ?>>
                <label for="text">Oui</label><br>
                <input type="radio" name="text" value="off" <?= ($_SESSION['preferences']['text'] == 'off') ? 'checked': '' ?>>
                <label for="text">Non</label><br>
            </div>
            <div>
                <p>Afficher l'image : </p>
                <input type="radio" name="image" value="on" <?= ($_SESSION['preferences']['image'] == 'on') ? 'checked': '' ?>>
                <label for="image">Oui</label><br>
                <input type="radio" name="image" value="off" <?= ($_SESSION['preferences']['image'] == 'off') ? 'checked': '' ?>>
                <label for="image">Non</label><br>
            </div>
            <input type="hidden" name="id" value="<?= $_SESSION['id']?>">
            <input type="submit" value="Ok">
        </form>
        <?php else: ?>
            <p>Merci de vous connecter pour accéder à cette page</p>
        <?php endif ?>
    </main>
</body>
</html>

