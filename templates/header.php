<header>
    <nav>
        <ul class="main-list flex">
            <li class="flex"><a href="/">Accueil</a></li>
            <li class="flex"><a href="meet.php">Rencontre</a></li>
            
            <?php if (!isset($_SESSION['name'])): ?>
                <li class="flex"><a href="login.php">Se connecter</a></li>
            <?php else: ?>
                <li class="account">
                    <span><?= $_SESSION['name'] ?></span>
                    <ul class="none">
                        <li><a href="profil.php">Profil</a></li>
                        <li ><a href="users.php">Utilisateurs</a></li>
                        <li><a href="controllers/logout.php">Déconnexion</a></li>
                    </ul>
                </li>
            <?php endif ?>
        </ul>
    </nav>
</header>