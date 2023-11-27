<?php
require_once 'conn.php';
require_once 'model.login.php';

function comprovarActualPass($pass, $id){
    try{
        $conn = con();
        $sql = $conn->prepare("SELECT password FROM usuaris WHERE id = ?");
        $sql->execute(array(
            $id,
        ));
        $resultat = $sql->fetch();
        if(password_verify($pass, $resultat['password'])){
            return true;
        }else{
            echo "La contrasenya actual no coincideix<hr>";
            return false;
        }
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}

function comprovarPassBD($pass, $id){
    try{
        $conn = con();

        $sql = $conn->prepare("SELECT * FROM usuaris WHERE id = ?");
        $sql->execute(array(
            $id,
        ));
        $resultat = $sql->fetch();
        $oldPass = $resultat['password'];
        if(password_verify($pass, $oldPass)){
            return false;
        }else{
            return true;
        }
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}

function canviarPassword($pass, $id, $token){
    try{
        $conn = con();
        $sql = $conn->prepare("SELECT * FROM usuaris WHERE id = ?");
        $sql->execute(array(
            $id,
        ));
        $resultat = $sql->fetch();
        if($resultat['token'] != $token){
            ?> <script>alert("<?php echo $resultat['token']; ?> y <?php echo $token; ?>")</script><?php
            header('Location: ../vista/login.vista.php');
        }else {
            $sql = $conn->prepare("UPDATE usuaris SET password = ? WHERE id = ?");
            $sql->execute(array(
                $pass,
                $id,
            ));
            
    
            ?> <script>alert("S'ha modificat la contrasenya")</script><?php
    
            eliminarToken($id);
            header('Location: ../vista/login.vista.php');
        }
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}
?>