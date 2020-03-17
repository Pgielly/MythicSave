<?php include_once 'controllers/getAllUser.php'?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/users.css">
        <title>Mythic | Utilisateurs</title>
    </head>

    <body>
        <?php include_once 'templates/header.php' ?>
        <main class="flex">
                <table>
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Supprimer </th>
                            <th>Modification </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) :?>
                            <tr>
                                <td class="user-id"> <?= $user['id'] ?> </td>
                                <td class="light-border padding-left"> <?= ucfirst($user['name']) ?> </td>
                                <td class="padding-left"> <?= $user['description'] ?></td> 
                                <td class=""> 
                                    <form action="./controllers/delete.php" method=post>
                                        <input type="hidden" name="id" value="<?= $user['id']?>">
                                        <input type="submit"  value="X" >
                                    </form>
                                </td>
                                <td class="delete-action"> 
                                    <form action="./updateOnUser.php" method=post>
                                        <input type="hidden" name="id" value="<?= $user['id']?>">
                                        <input type="hidden" name="name" value="<?= $user['name']?>">
                                        <input type="hidden" name="description" value="<?= $user['description']?>">
                                        <input type="submit"  value="✎" >
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
        </main>
    </body>
</html>