<?php
function dbConnexion(){
    $connexion = null;
    try{
        $connexion = new PDO("mysql:host=localhost;dbname=visite_de_paris_a_moto", "root", "root");
    }catch(Exception $e){
        $connexion = $e->getMessage();
    }
    return $connexion;
}

function reserver($nom, $prenom, $email, $tel, $lieu, $datepc, $societe, $facturation, $information){
    $client = clientExist($email);
    if($client == false){
        ajoutClient($nom, $prenom, $email, $tel, $societe);
        $client = clientExist($email);
    }
    valideReservation($lieu, $datepc, $facturation, $information, $client);
    header("Location: https://visitedeparisamoto.fr/");
}

function clientExist($email){
    $connexion = dbConnexion();
    $request = $connexion->prepare("SELECT * FROM clients WHERE email = ?");
    $request->execute(array($email));
    $client = $request->fetch();
    if(empty($client)){
        return false;
    }else{
        return $client['id_client'];
    }
}

function ajoutClient($nom, $prenom, $email, $tel,$societe){
    $connexion = dbConnexion();
    $request = $connexion->prepare("INSERT INTO clients (nom, prenom, email, telephone, societe) VALUES (?,?,?,?,?)");
    $request->execute(array($nom, $prenom, $email, $tel,$societe));
}

function valideReservation($lieu, $datepc, $facturation, $information, $client){
    $connexion = dbConnexion();
    $request = $connexion->prepare("INSERT INTO reservations (lieu_depart, date_prise_en_charge, adresse_facturation, info, client) VALUES (?, ?, ?, ?, ?)");
    $request->execute(array($lieu, $datepc, $facturation, $information, $client));
}

function listeClient(){
    $connexion = dbConnexion();
    $request = $connexion->prepare("SELECT * FROM clients");
    $request->execute();
    $clients = $request->fetchAll();
    return $clients;
}

function listeAgent(){
    $connexion = dbConnexion();
    $request = $connexion->prepare("SELECT * FROM agents");
    $request->execute();
    $agents = $request->fetchAll();
    return $agents;
}

function listeReservation(){
    $connexion = dbConnexion();
    $request = $connexion->prepare("SELECT * FROM reservations WHERE etat = ?");
    $request->execute(array('en cours'));
    $reservations = $request->fetchAll();
    return $reservations;
}

function connexion($email, $password){
    $connexion = dbConnexion();
    $request = $connexion->prepare("SELECT * FROM agents WHERE email = ?");
    $request->execute(array($email));
    $agent = $request->fetch();
    if(empty($agent)){
        header("Location: https://visitedeparisamoto.fr/");
    }else{
        if(password_verify($password, $agent['password'])){
            $_SESSION['user'] = true;
            header("Location: https://visitedeparisamoto.fr/admin.php");
        }else{
            header("Location: https://visitedeparisamoto.fr/login.html");
        }
    }
}

function  ajouteAgent($nom, $prenom, $email, $adresse, $password){
    $connexion = dbConnexion();
    $request = $connexion->prepare("INSERT INTO agents (nom, prenom, email, adresse, password) VALUES (?,?,?,?,?)");
    $request->execute(array($nom, $prenom, $email, $adresse, $password));
    header("Location: https://visitedeparisamoto.fr/login.html");
}

function supprimerClient($idClient){
    $connexion = dbConnexion();
    $request = $connexion->prepare("DELETE FROM clients WHERE id_client = ?");
    $request->execute(array($idClient));
    header("Location: https://visitedeparisamoto.fr/liste_client.php");
}

function annulerReservation($idRes){
    $connexion = dbConnexion();
    $request = $connexion->prepare("UPDATE reservations SET etat = ? WHERE id_reservation = ?");
    $request->execute(array('annule', $idRes));
    header("Location: https://visitedeparisamoto.fr/liste_reservation.php");
}