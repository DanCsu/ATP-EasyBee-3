<?php // header.php ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Bee - Formations Apicoles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo-container">
                <div class="logo-image">
                    <img src="LogoEasyBee.png" alt="Logo Easy Bee">
                </div>
                <div class="logo-title">
                    <h1>Easy Bee</h1>
                </div>
                <div class="nav-list">
                    <nav>
                        <ul>
                            <li><a href="index.php">Accueil</a></li>
                            <li><a href="formations.php">Formations</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="user-menu">
                <img src="LogIn.png" alt="Connexion" class="login-icon">
                <ul class="dropdown-menu">
                    <?php session_start(); ?>
                    <?php if (isset($_SESSION['user'])): ?> 
                        <li><a href="deconnexion.php">Déconnexion</a></li>
                    <?php else: ?>
                        <li><a href="connexion.php">Connexion</a></li>
                        <li><a href="inscription.php">S'inscrire</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </header>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const userMenu = document.querySelector(".user-menu");
        const dropdownMenu = document.querySelector(".dropdown-menu");

        userMenu.addEventListener("click", function (event) {
            event.stopPropagation();
            dropdownMenu.classList.toggle("active");
        });

        document.addEventListener("click", function (event) {
            if (!userMenu.contains(event.target)) {
                dropdownMenu.classList.remove("active");
            }
        });
    });
    </script>
</body>
</html>