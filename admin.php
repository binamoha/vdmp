<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: https://visitedeparisamoto.fr/login.html");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-top: 100px;">
        <div class="d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="../Images/user.png" class="card-img-top" alt="user">
                <div class="card-body">
                    <a href="../agent.html" class="btn btn-primary">Ajouter Agent</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="../Images/users.png" class="card-img-top" alt="client">
                <div class="card-body">
                    <a href="liste_client.php" class="btn btn-primary">Liste Client</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="../Images/reservation.png" class="card-img-top" alt="reservation">
                <div class="card-body">
                    <a href="liste_reservation.php" class="btn btn-primary">Liste Reservation</a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around" style="margin-top: 15px;">
            <div class="card" style="width: 18rem;">
                <img src="../Images/users.png" class="card-img-top" alt="client">
                <div class="card-body">
                    <a href="liste_agent.php" class="btn btn-primary">Liste Agent</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>