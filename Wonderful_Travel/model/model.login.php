<?php
require_once 'conn.php';

function hashPassword($email){
    try{
        //Cojer la password de la BD y devolverla
        $connexio = con();
        //comprovar que l'username existeixi a la BD
        $sql = $connexio->prepare("SELECT * FROM usuaris WHERE email = ?");
        $sql->execute(array(
            $email,
        ));
        $comprovarEmail = $sql->fetch();
        //Si no existeix el registrem a la BD
        if(isset($comprovarEmail)){
            $sql = $connexio->prepare("SELECT password FROM usuaris WHERE email = ?");
            $sql->execute(array(
                $email,
            ));
            $pass = $sql->fetch();
            if(isset($pass['password'])){
                return $pass['password'];
            }
        }else echo "L'usuari no existeix<hr>";
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}
?>