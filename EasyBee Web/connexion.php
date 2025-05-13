<?php // connexion.php ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Easy Bee</title>
    <link rel="stylesheet" href="style.css">
    <script>
        // Fonction pour afficher la pop-up et rediriger après un délai
        function showSuccessPopup() {
            alert("Vous êtes bien connecté !"); // Afficher la pop-up
            setTimeout(function() {
                window.location.href = "index.php"; // Rediriger vers la page d'accueil après 3 secondes
            }, 3000); // Délai de 3 secondes
        }

        window.onload = function() {
            <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                showSuccessPopup(); // Afficher la pop-up si la connexion est réussie
            <?php endif; ?>
        };
    </script>
</head>
<body>
    <!-- Header -->
    <?php include('header.php'); ?>

    <!-- Section Connexion -->
    <section class="connexion">
        <h2>Connexion</h2>
        <p>Connectez-vous à votre compte pour accéder à vos formations et suivre votre progression.</p>

        <?php if (isset($_GET['erreur'])): ?>
            <div class="erreur-message">
                <?php
                switch ($_GET['erreur']) {
                    case 1:
                        echo "<p style='color:red;'>Veuillez remplir tous les champs.</p>";
                        break;
                    case 2:
                        echo "<p style='color:red;'>Le mot de passe est incorrect.</p>";
                        break;
                    case 3:
                        echo "<p style='color:red;'>L'email n'existe pas.</p>";
                        break;
                    default:
                        echo "<p style='color:red;'>Erreur inconnue.</p>";
                }
                ?>
            </div>
        <?php endif; ?>

        <!-- Formulaire de connexion -->
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