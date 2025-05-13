<?php
// démarrer la session pour gérer la connexion de l'utilisateur
session_start();

// Inclure la connexion à la base de données
include('connexion_bdd.php');

// Récupérer les données du formulaire
$email = trim($_POST['email']);
$motdepasse = $_POST['motdepasse'];

// Vérifier que les champs ne sont pas vides
if (empty($email) || empty($motdepasse)) {
    header("Location: connexion.php?erreur=1");
    exit();
}

// Requête pour vérifier si l'email existe dans la base de données
$sql = "SELECT * FROM clients WHERE emailClient = :email";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->execute();

// Vérifier si l'email existe dans la base de données
if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifier le mot de passe
    if (password_verify($motdepasse, $user['mdpClient'])) {
        // Le mot de passe est correct, démarrer la session
        $_SESSION['user_id'] = $user['idClient'];
        $_SESSION['email'] = $user['emailClient'];

        // Rediriger vers la page de connexion avec un paramètre success
        header("Location: connexion.php?success=1");
        exit();
    } else {
        // Mot de passe incorrect
        header("Location: connexion.php?erreur=2");
        exit();
    }
} else {
    // L'email n'existe pas dans la base de données
    header("Location: connexion.php?erreur=3");
    exit();
}
?>