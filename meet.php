<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/meet.css">
    <link rel="stylesheet" href="./css/header.css">
    <title>Mythic | Rencontre</title>
</head>
<body>
    <?php include_once 'templates/header.php' ?>
    <h1>Trouvez votre moit-moit </h1>
    <main class="flex">
        <div class="card flex gray">
            <img class="img" src="img/Kirby.png" width='200' height ='200' alt="">
            <p class="character-name center">Kirby</p>
            <p class="description center"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique non consectetur reiciendis vero id ad, cumque ab, quasi ipsa enim, perspiciatis libero. Placeat optio dolor numquam nihil magni nisi veritatis?</p>
        </div>
        <div class="card flex">
            <img class="img" src="img/Harmonie.png" width='150' height ='200' alt="">
            <p class="center character-name">Harmonie</p>
            <p class="center description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis exercitationem, dolore voluptates minima libero ad architecto numquam velit amet delectus animi cum iusto dolorem, accusamus sed quos doloremque enim voluptatum.!</p>
        </div>
        <div class="card flex gray">
            <img class="img" src="img/bowser.png" width='200' height ='200' alt="">
            <p class="center character-name">Bowser</p>
            <p class="center description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates, ab deserunt accusamus tempora pariatur libero culpa reiciendis odio optio inventore? Accusantium atque ipsum illum tempora animi sed ipsa, id nobis.</p>
        </div>
    </main>
</body>
</html>