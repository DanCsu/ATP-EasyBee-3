<?php
// Définir les paramètres de connexion à la base de données
$host = "127.0.0.1"; // Hôte de la base de données (local)
$port = "3306"; // Port par défaut de MySQL
$dbname = "projet_pro_3"; // Nom de la base de données
$username = "root"; // Nom d'utilisateur de la base de données (à ajuster si nécessaire)
$password = ""; // Mot de passe de la base de données (à ajuster si nécessaire)

// Créer la connexion
try {
    // Connexion à la base de données avec PDO
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4"; // DSN pour MySQL
    $pdo = new PDO($dsn, $username, $password);
    
    // Paramétrer les erreurs PDO pour être en mode exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion réussi à la base de données !";
    
} catch (PDOException $e) {
    // Si la connexion échoue, afficher l'erreur et arrêter l'exécution du script
    die("Erreur de connexion : " . $e->getMessage());
}
?>