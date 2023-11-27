<?php
require_once '../model/conn.php';

function existeixUsuari($username){
    try{
        $conn = con();
        $sql = $conn->prepare("SELECT * FROM usuaris WHERE username = ?");
        $sql->execute(array(
            $username,
        ));
        $resultat = $sql->fetch();
        if(empty($resultat)){
            return true;
        }else{
            return false;
        }
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}

function existeixEmail($email){
    try{
        $conn = con();
        $sql = $conn->prepare("SELECT * FROM usuaris WHERE email = ?");
        $sql->execute(array(
            $email,
        ));
        $resultat = $sql->fetch();
        if(empty($resultat)){
            return true;
        }else{
            return false;
        }
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}

function insertarUsuari($username, $email, $password){
    try{
        $conn = con();
        $sql = $conn->prepare("INSERT INTO usuaris (username, password, email) VALUES (?, ?, ?)");
        $sql->execute(array(
            $username,
            $password,
            $email
        ));
        ?>  <div class="alert alert-success" role="alert">
                L'usuari $username s'ha registrat correctament
            </div>
        <?php
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}
?>