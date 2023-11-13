<?php
require_once("conn.php");
$con = con();

function imatgePais(){
    if(isset($_GET['destiPais'])){
        global $con;
        try{
            $stmt = $con->prepare("SELECT imatge FROM destiviatges WHERE destiPais = ?");
            $stmt->execute(array(
                $_GET['destiPais'],
            ));

            $result = $stmt->fetch();
            echo $result['imatge'];
    
        }catch(PDOException $e){
            die("Error: ".$e->getMessage());
        }
    }
}
?>