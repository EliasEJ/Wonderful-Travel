<?php
session_start();
include '../model/model.reserves.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
    }
    
    $data = htmlspecialchars($_POST['dataReserva']);
    $desti = htmlspecialchars($_POST['destiPais']);
    $preu = htmlspecialchars($_POST['preu']);
    $nom = htmlspecialchars($_POST['nom']);
    $telf = htmlspecialchars($_POST['telf']);
    $numPersones = htmlspecialchars($_POST['numPersones']);
    $img = htmlspecialchars($_POST['imgSrc']);

    afegir($email, $data, $desti, $preu, $nom, $telf, $numPersones, $img);
    header("Location: ../index.php");
}
?>