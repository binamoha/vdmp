<?php
// inclusion du fichier de configuration
require_once('config.php');

// récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password'];

// préparation de la requête d'insertion
$sql = "INSERT INTO Transporteur (nom, prenom, email, password) VALUES (?, ?, ?, ?)";

// préparation de la commande SQL pour l'envoi
$stmt = mysqli_prepare($connexion, $sql);

// sécurisation des données envoyées
mysqli_stmt_bind_param($stmt, 'ssss', $nom, $prenom, $email, $password);

// exécution de la commande SQL pour l'envoi
if (mysqli_stmt_execute($stmt)) {
    // Rediriger vers la page de succès
    header('Location: success.php');
    exit();
} else {
    echo "Erreur lors de l'enregistrement du transporteur: " . mysqli_error($connexion);
}

// Fermer la connexion à la base de données
$connexion->close();
