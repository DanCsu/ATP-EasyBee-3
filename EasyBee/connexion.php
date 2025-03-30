<?php // connexion.php ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Easy Bee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <?php include('header.php'); ?>

    <!-- Section Connexion -->
    <section class="connexion">
        <h2>Connexion</h2>
        <p>Connectez-vous à votre compte pour accéder à vos formations et suivre votre progression.</p>

        <form action="traitement_connexion.php" method="POST" class="connexion-form">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="motdepasse">Mot de passe :</label>
            <input type="password" id="motdepasse" name="motdepasse" required>

            <button type="submit" class="btn-primary">Se connecter</button>
        </form>

        <p>Pas encore de compte ? <a href="inscription.php">Inscrivez-vous ici</a></p>
    </section>

    <!-- Footer -->
    <?php include('footer.php'); ?>
</body>
</html>