<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/updateOnUser.css">
        <title>Mythic | Modification</title>
    </head>
    <body>
        <?php include_once './templates/header.php' ?>
      
        <main>
            <div class="flex container">
                <?php if (isset($_SESSION['name'])) : ?>
                    <form action="/controllers/update.php" method="post" >
                        <h3> Modification des données :</h3>
                        <div>
                            <label for="name"> Change ton nom :</label>
                            <input type="text" name="name" value="<?= $_POST['name'] ?>">
                        </div>
                        <div>
                            <label for="description"> Change ta description : </label>
                            <textarea name="description" cols="30" rows="5"><?= $_POST['description'] ?></textarea>
                        </div>
                        <input type="hidden" name="id" value="<?= $_SESSION['id']?>">
                        <input type="submit" value="Enregistrer">
                    </form>
                <?php else :?>
                    <p> Veuillez vous connecter pour accéder à cette page …</p>
                <?php endif?>
            </div>
        </main>
    </body>
</html>



