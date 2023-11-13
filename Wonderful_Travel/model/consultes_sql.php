<?php
require_once("conn.php");
$con = con();
$destiPais = $_GET['destiPais']; 

function imatgePais(){
    global $con;
    try{
        $stmt = $con->prepare("SELECT imatge FROM destiviatges WHERE destiPais = :destiPais");
        $stmt->bindParam(':destiPais', $destiPais);

        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['imatge'];

    }catch(PDOException $e){
        die("Error: ".$e->getMessage());
    }
}
?>