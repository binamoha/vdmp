<?php
session_start();
require_once "fonctions.php";
if(isset($_POST["connexion"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    connexion($email, $password);
}

if(isset($_POST['agent'])){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $adresse = $_POST["adresse"];
    $password = $_POST["password"];
    $password = password_hash($password, PASSWORD_DEFAULT);
    ajouteAgent($nom, $prenom, $email, $adresse, $password);
}

if(isset($_GET['id_client'])){
    supprimerClient($_GET['id_client']);
}