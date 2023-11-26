<?php
require_once '../model/consultes_sql.php';

function insertarReserva(){
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
      }
      
    $data = $_POST['dataReserva'];
    $desti = $_POST['destiPais'];
    $preu = $_POST['preu'];
    $nom = $_POST['nom'];
    $telf = $_POST['telf'];
    $numPersones = $_POST['numPersones'];

    afegir($email, $data, $desti, $preu, $nom, $telf, $numPersones);
}

?>