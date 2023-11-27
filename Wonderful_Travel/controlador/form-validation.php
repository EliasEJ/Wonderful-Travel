<?php
session_start();
include '../model/model.reserves.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
    }
    
    $data = $_POST['dataReserva'];
    $desti = $_POST['destiPais'];
    $preu = $_POST['preu'];
    $nom = $_POST['nom'];
    $telf = $_POST['telf'];
    $numPersones = $_POST['numPersones'];
    $img = $_POST['imgDesti'];

    afegir($email, $data, $desti, $preu, $nom, $telf, $numPersones);
    header("Location: ../index.php");
}
?>