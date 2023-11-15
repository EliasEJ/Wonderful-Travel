<?php
require_once("conn.php");
$con = con();

function imatgePais(){
    global $con;
    $destiPais = $_GET['destiPais'] ?? null; 
    if ($destiPais === null) {
        return null;
    }

    try{
        $stmt = $con->prepare("SELECT imatge FROM destiviatges WHERE destiPais = :destiPais");
        $stmt->bindParam(':destiPais', $destiPais);
        $stmt->execute();
        $result = $stmt->fetch();
        echo $result['imatge'];
    
    }catch(PDOException $e){
        die("Error: ".$e->getMessage());
    }
}


function preuDesti(){
    global $con;
    $destiPais = $_GET['destiPais'] ?? null; 
    if ($destiPais === null) {
        return null;
    }

    try{
        $stmt = $con->prepare("SELECT preu FROM destiviatges WHERE destiPais = :destiPais");
        $stmt->bindParam(':destiPais', $destiPais);

        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        echo $row['preu'] . " €";

    }catch(PDOException $e){
        die("Error: ".$e->getMessage());
    }
}
?>