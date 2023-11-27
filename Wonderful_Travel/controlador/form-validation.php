<?php
session_start();
include '../model/model.reserves.php';
require_once '../index.php';

// Validar que su ha dado al boton sumbit.
if (isset($_POST['submit'])) {
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
    }
    
    // $data = $_POST['dataReserva'];
    // $desti = $_POST['destiPais'];
    // $preu = $_POST['preu'];
    // $nom = $_POST['nom'];
    // $telf = $_POST['telf'];
    // $numPersones = $_POST['numPersones'];
    
    $data = '2022-12-31';
    $desti = 'Spain';
    $preu = '100';
    $nom = 'Test User';
    $telf = '123456789';
    $numPersones = '2';
    
    afegir($email, $data, $desti, $preu, $nom, $telf, $numPersones);
    header("Location: ../index.php");
}

