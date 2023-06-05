<?php
// Inclusion du fichier de configuration contenant les informations de connexion
require_once '/scripts/config.php';

// Récupération des données du formulaire
$nom = $_POST['nom'];
$description = $_POST['description'];
$duree = $_POST['duree'];
$prix = $_POST['prix'];

// Connexion à la base de données
$connexion = new mysqli($host, $user, $password, $database);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("Erreur de connexion à la base de données : " . $connexion->connect_error);
}

// Préparation de la requête SQL d'insertion
$insertion = $connexion->prepare("INSERT INTO Visite (nom, description, duree, prix) VALUES (?, ?, ?, ?)");
$insertion->bind_param("ssii", $nom, $description, $duree, $prix);

// Exécution de la requête SQL
if ($insertion->execute()) {
    // Rediriger vers la page de succès
    header('Location: success.php');
    exit();
} else {
    echo "Erreur lors de l'insertion des données : " . $insertion->error;
}

// Fermeture de la connexion à la base de données
$connexion->close();
