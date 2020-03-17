<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="icon" type="image/png" href="img/game.png" />
    <title>Mythic | Connexion</title>
</head>
<body>
    <?php include_once 'templates/header.php' ?>
    <main class="flex">

        <div class="flex fun">
            <div class="hear"></div>
            <div class="hear"></div>
        </div>

        <form action="./controllers/log.php" method="POST" class="flex none" id="form-log">

            <label for="name"> Connexion : </label>

            <div>
                <label for="name">Ton super nom : </label>
                <input type="text" name="name" placeholder="Falco" required>
            </div>

            <div>
                <label for="password">Ton mot de passe : </label>
                <input type="password" name="password" placeholder="•••••"required>
            </div>

            <input id="submit-log" type="submit" value="Here we go!">
            <h6>Pas encore de compte? <span class="switch-form">S'inscrire</span></h6>
        </form>

        <form action="./controllers/inscription.php" method="POST" class="flex" id="form-register">

            <label for="name">Inscription : </label>

            <div>
                <label for="name">Ton nom : </label>
                <input type="text" name="name" placeholder="Falco" required>
            </div>

            <div>
                <label for="password">Ton mot de passe : </label>
                <input type="password" name="password" placeholder="•••••" required>
            </div>

            <div>
                <label for="description">Ta description : </label>
                <textarea name="description" rows="4" cols="30" placeholder="Ecris ici..." required></textarea>
            </div>

            <input id="submit-register" type="submit" value="Here we go!">
            <h6>Déjà un compte? <span class="switch-form">Se connecter</span></h6>
        </form>

    </main>
    <script src="js/script.js"></script>
</body>
</html>