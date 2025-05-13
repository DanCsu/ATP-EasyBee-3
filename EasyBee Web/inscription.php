<?php // inscription.php ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Easy Bee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <?php include('header.php'); ?>

    <!-- Section inscription -->
    <section class="inscription">
        <h2>Inscription</h2>
        <p class="pinscription">Pour accéder à nos formations et suivre votre progression, veuillez vous inscrire dès maintenant.</p>

        <form action="traitement_connexion.php" method="POST" class="inscription-form">
            <div class="prenometnom">
                <div class="prenom">
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>
                <div class="nom">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
            </div>

            <div class="emailetpassword">
                <div class="email">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="motdepasse">
                    <label for="motdepasse">Mot de passe :</label>
                    <input type="password" id="motdepasse" name="motdepasse" required>
                </div>
            </div>

            <div class="username">
                <div>
                    <label for="username">Nom d'utilisateur :</label>
                    <input type="text" id="username" name="username" required>
                </div>
            </div>

            <button type="submit" class="btn-primary">S'inscrire</button>
        </form>
        <p>Vous pocéder déjà un compte ? <a href="connexion.php">Connecter vous ici</a></p>
    </section>

    <!-- Footer -->
    <?php include('footer.php'); ?>
</body>
</html>