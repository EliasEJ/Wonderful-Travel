<?php
require_once '../controlador/controlador.recuperarContrasenya.php';
require_once 'conn.php';

function comprovarEmailExisteixModel($email){
    try{
        $conn = con();
        $sql = $conn->prepare("SELECT * FROM usuaris WHERE email = ?");
        $sql->execute(array(
            $email,
        ));
        $resultat = $sql->fetch();
        if(empty($resultat)){
            return false;
        }else{
            return true;
        }
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}

function idUsuariRecuperar($email){
    try{
        $conn = con();
        $sql = $conn->prepare("SELECT id FROM usuaris WHERE email = ?");
        $sql->execute(array(
            $email,
        ));
        $id = $sql->fetch();
        return $id['id'];
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}

function crearToken($id){
    try{
        $conn = con();
        $token = md5(uniqid(rand(), true));
        $sql = $conn->prepare("UPDATE usuaris SET token = ?, token_time = ? WHERE id = ?");
        $sql->execute(array(
            $token,
            date("Y-m-d H:i:s"),
            $id,
        ));
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}

function obtenirToken($id){
    try{
        $conn = con();
        $sql = $conn->prepare("SELECT * FROM usuaris WHERE id = ?");
        $sql->execute(array(
            $id,
        ));
        $resultat = $sql->fetch();
        $tokenTime = $resultat['token_time'];
        $token = $resultat['token'];
        $resta = strtotime(date("Y-m-d H:i:s")) - strtotime($tokenTime);
        
        //comprovem que el token no hagi caducat
        if($resta > 14400){
            ?> <script>alert("El token ha caducat");</script> <?php
            eliminarToken($id);
            return false;
        }else{
            return $token;
        }
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}

function eliminarToken($id){
    try{
        $conn = con();
        $sql = $conn->prepare("UPDATE usuaris SET token = NULL, token_time = NULL WHERE id = ?");
        $sql->execute(array(
            $id,
        ));
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}

function comprovarToken($token, $id){
    try{
        $conn = con();
        $sql = $conn->prepare("SELECT * FROM usuaris WHERE id = ?");
        $sql->execute(array(
            $id,
        ));
        $resultat = $sql->fetch();
        $tokenBD = $resultat['token'];
        if($tokenBD == $token){
            return true;
        }else{
            return false;
        }
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}
?>