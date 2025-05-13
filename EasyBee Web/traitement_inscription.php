<?php
session_start();
require_once('connexion_bdd.php');

if (
    empty($_POST['prenom']) ||
    empty($_POST['nom']) ||
    empty($_POST['email']) ||
    empty($_POST['motdepasse']) ||
    empty($_POST['username'])
) {
    header('Location: inscription.php?erreur=1');
    exit();
}

$prenom = trim($_POST['prenom']);
$nom = trim($_POST['nom']);
$email = trim($_POST['email']);
$motdepasse = trim($_POST['motdepasse']);
$username = trim($_POST['username']);

$checkEmail = $pdo->prepare('SELECT idUtilisateur FROM clients WHERE emailClient = ?');
$checkEmail->execute([$email]);

if ($checkEmail->rowCount() > 0) {
    header('Location: inscription.php?erreur=2');
    exit();
}

$motdepasse_hash = password_hash($motdepasse, PASSWORD_DEFAULT);

$insert = $pdo->prepare('INSERT INTO clients (prenomClient, nomClient, emailClient, mdpClient, identifiantClient) VALUES (?, ?, ?, ?, ?)');
$success = $insert->execute([$prenom, $nom, $email, $motdepasse_hash, $username]);

if ($success) {
    header('Location: connexion.php?success=1');
    exit();
} else {
    header('Location: inscription.php?erreur=3');
    exit();
}
?>