<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="icon" type="image/png" href="img/game.png" />
    <title>Mythic | Accueil</title>
</head>
<body>
    <?php include_once 'templates/header.php' ?>
    <main class="flex">
        <?php if (!isset($_SESSION['name'])): ?>
            <div class="title">
                <h1>Bienvenu</h1>
            </div>
            <div>
                <p>Merci de bien vouloir vous connecter!</p>
            </div>
        <?php else: ?>
            <div class="flex home-log">
                <h1>Bienvenue, <?= $_SESSION['name'] ?> !</h1>
                <?php if ($_SESSION['preferences']['image'] == 'on'): ?>
                    <div>
                        <img src="img/all.jpg" alt="">
                    </div>
                <?php endif ?>
                <?php if ($_SESSION['preferences']['text'] == 'on'): ?>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem officia perferendis illum, porro sapiente quo labore eos ab, repudiandae quae molestias obcaecati, praesentium delectus et? Excepturi nobis recusandae beatae. Ullam.</p>
                    </div>
                <?php endif ?>
            </div>
        <?php endif ?>
    </main>
</body>
</html>