<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: https://visitedeparisamoto.fr/login.html");
}
require_once "fonctions.php";
$clients = listeClient();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <title>Administration</title>
</head>
<body>
    <div class="sep">
        <h1 style="text-align: center">Liste des Clients</h1>
    </div>
    <div style="height: 130px"></div>
    <div class="container">
        <table class="table table-striped" style="position: sticky;top: 0">
            <thead class="text-bg-dark">
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Societe</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($clients as $client) {?>
                    <tr>
                        <td><?= $client['nom']?></td>
                        <td><?= $client['prenom']?></td>
                        <td><?= $client['email']?></td>
                        <td><?= $client['telephone']?></td>
                        <td><?= $client['societe']?></td>
                        <td><a href="utilisateur.php?id_client=<?= $client['id_client']?>">Supprimer</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html>

