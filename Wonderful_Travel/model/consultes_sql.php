<?php
require_once("conn.php");
$con = con();

function imatgePais(){
    global $con;
    try{
        $stmt = $con->prepare("SELECT * FROM destiviatges WHERE destiContinent = :cont AND destiPais = :pais");
        $stmt->bindParam(':cont', $_GET['desti']);
        $stmt->bindParam(':pais', $_GET['pais']);

        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['imatge'];

    }catch(PDOException $e){
        die("Error: ".$e->getMessage());
    }
}
?>