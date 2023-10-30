<?php
require_once("conn.php");
$con = con();

function imatgePais(){
    global $con;
    try{
        $stmt = $con->prepare("SELECT id FROM pais");
    }catch(PDOException $e){
        die("Error: ".$e->getMessage());
    }
}
?>