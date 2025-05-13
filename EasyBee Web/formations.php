<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Formations - Easy Bee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <?php include('header.php'); ?>

    <!-- Section Formations -->
    <section class="formations">
        <h2>Nos Formations</h2>
        <p>Explorez nos formations adaptées à tous les niveaux, et apprenez l'apiculture à votre rythme.</p>

        <div class="formation-card">
            <h3>Formation Débutant</h3>
            <p>Découvrez les bases de l'apiculture et apprenez à gérer votre première ruche.</p>
            <a href="<?php echo $isLoggedIn ? 'formation_debutant.php' : 'connexion.php'; ?>" class="btn-primary">
                Détails
            </a>
        </div>

        <div class="formation-card">
            <h3>Formation Avancée</h3>
            <p>Perfectionnez vos compétences en apiculture et gérez des ruches plus complexes.</p>
            <a href="<?php echo $isLoggedIn ? 'formation_avancee.php' : 'connexion.php'; ?>" class="btn-primary">
                Détails
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php include('footer.php'); ?>
</body>
</html>