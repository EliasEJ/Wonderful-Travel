<?php
require_once("conn.php");
$con = con();

session_start();

function obtenirDades() {
    global $con;

    try {
        $stmt = $con->prepare("SELECT destiPais, imatge, preu FROM destiviatges");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $_SESSION['destiData'] = [];
        foreach ($result as $row) {
            $_SESSION['destiData'][$row['destiPais']] = [
                'imatge' => $row['imatge'],
                'preu' => $row['preu']
            ];
        }
    } catch(PDOException $e) {
        die("Error: ".$e->getMessage());
    }
}

obtenirDades();
?>