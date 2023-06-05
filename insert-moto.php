<?php

// Inclusion du fichier de configuration
require_once('config.php');

// Récupération des données du formulaire
$marque = $_POST['marque'];
$modele = $_POST['modele'];
$annee = $_POST['annee'];
$couleur = $_POST['couleur'];

// Requête SQL pour insérer une nouvelle moto dans la base de données
$sql = "INSERT INTO Moto (marque, modele, annee, couleur) VALUES ('$marque', '$modele', '$annee', '$couleur')";

// Exécution de la requête SQL
if (mysqli_query($connexion, $sql)) {
    // Rediriger vers la page de succès
    header('Location: success.php');
    exit();
} else {
    echo "Erreur : " . mysqli_error($connexion);
}

// Fermer la connexion à la base de données
$connexion->close();
