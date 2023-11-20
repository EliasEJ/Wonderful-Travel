<?php
require_once("conn.php");
require_once("consultes_sql.php");
$con = con();

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST['dataReserva'];
    $desti = $_POST['destiPais'];
    $preu = $_POST['preu'];
    $nom = $_POST['nom'];
    $telf = $_POST['telf'];
    $numPersones = $_POST['numPersones'];

    afegir($data, $desti, $preu, $nom, $telf, $numPersones);
}

?>