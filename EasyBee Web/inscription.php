<?php // inscription.php ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Easy Bee</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function showSuccessPopup() {
            alert("Inscription réussie ! Vous pouvez maintenant vous connecter.");
            setTimeout(function() {
                window.location.href = "connexion.php"; // Redirection vers la page de connexion
            }, 3000);
        }

        window.onload = function() {
            <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                showSuccessPopup(); // Afficher la pop-up si inscription réussie
            <?php endif; ?>
        };
    </script>
</head>
<body>
    <!-- Header -->
    <?php include('header.php'); ?>

    <!-- Section Inscription -->
    <section class="inscription">
        <h2>Inscription</h2>
        <p class="pinscription">Pour accéder à nos formations et suivre votre progression, veuillez vous inscrire dès maintenant.</p>

        <?php if (isset($_GET['erreur'])): ?>
            <div class="erreur-message">
                <?php
                switch ($_GET['erreur']) {
                    case 1:
                        echo "<p style='color:red;'>Veuillez remplir tous les champs.</p>";
                        break;
                    case 2:
                        echo "<p style='color:red;'>Cet email est déjà utilisé.</p>";
                        break;
                    case 3:
                        echo "<p style='color:red;'>Une erreur est survenue. Veuillez réessayer.</p>";
                        break;
                    default:
                        echo "<p style='color:red;'>Erreur inconnue.</p>";
                }
                ?>
            </div>
        <?php endif; ?>

        <!-- Formulaire d'inscription -->
        <form action="traitement_inscription.php" method="POST" class="inscription-form">
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
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required>
            </div>

            <button type="submit" class="btn-primary">S'inscrire</button>
        </form>

        <p>Vous possédez déjà un compte ? <a href="connexion.php">Connectez-vous ici</a></p>
    </section>

    <!-- Footer -->
    <?php include('footer.php'); ?>
</body>
</html>