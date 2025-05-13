<?php // contact.php ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous - Easy Bee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <?php include('header.php'); ?>

    <!-- Section Contact -->
    <section class="contact">
        <h2>Contactez-nous</h2>
        <p>Nous sommes à votre écoute pour répondre à toutes vos questions concernant nos formations.</p>

        <form action="traitement_formulaire.php" method="POST" class="contact-form">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit" class="btn-primary">Envoyer</button>
        </form>
    </section>

    <!-- Footer -->
    <?php include('footer.php'); ?>
</body>
</html>