<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

if(isset($_POST['contact'])){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $source = $_POST["source"];
    $message = $_POST["message"];



    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bintaseye.niang@gmail.com';
    $mail->Password = 'qpucdimgrcwvsxvp';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('bintaseye.niang@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = $prenom.' '.$nom;
    $mail->Body = $message;

    $mail->addAddress($email);
    $mail->send();
}
header("Location: https://visitedeparisamoto.fr/");