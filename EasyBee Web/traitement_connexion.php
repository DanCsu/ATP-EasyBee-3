<?php
session_start();
include('connexion_bdd.php');

$email = trim($_POST['email']);
$motdepasse = $_POST['motdepasse'];

if (empty($email) || empty($motdepasse)) {
    header("Location: connexion.php?erreur=1");
    exit();
}

$sql = "SELECT * FROM clients WHERE emailClient = :email";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifier le mot de passe
    if (password_verify($motdepasse, $user['mdpClient'])) {
        $_SESSION['user_id'] = $user['idClient'];
        $_SESSION['email'] = $user['emailClient'];

        header("Location: connexion.php?success=1");
        exit();
    } else {
        header("Location: connexion.php?erreur=2");
        exit();
    }
} else {
    header("Location: connexion.php?erreur=3");
    exit();
}
?>