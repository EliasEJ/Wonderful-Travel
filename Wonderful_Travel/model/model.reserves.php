<?php
require_once("conn.php");
$con = con();

function afegir($email, $data, $desti, $preu, $nom, $telf, $numPersones){
    global $con;
    try {
        $stmt = $con->prepare("INSERT INTO reserves (usuari, dataReserva, desti, preu, nom, telf, numPersones) VALUES (:email, :dataReserva, :desti, :preu, :nom, :telf, :numPersones)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':dataReserva', $data);
        $stmt->bindParam(':desti', $desti);
        $stmt->bindParam(':preu', $preu);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':telf', $telf);
        $stmt->bindParam(':numPersones', $numPersones);
        $stmt->execute();
    } catch(PDOException $e) {
        ("Error: ".$e->getMessage());
    }
}
?>