<?php
require_once("conn.php");
require_once("consultes_sql.php");
$con = con();

session_start();

if(isset($_POST['submit'])){
    $data = $_POST['dataReserva'];
    $desti = $_POST['destiPais'];
    $preu = $_POST['preu'];
    $nom = $_POST['nom'];
    $telf = $_POST['telf'];
    $numPersones = $_POST['numPersones'];
    echo $nom;

    afegir($data, $desti, $preu, $nom, $telf, $numPersones);
}

?>