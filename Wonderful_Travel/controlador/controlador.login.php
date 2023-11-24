<?php
require_once '../model/model.login.php';
require_once 'controlador.comprovacions.php';

if(isset($_POST['login'])){
    function comprovacionsL(){
        $email = comprovarEmail($_POST['emailL']);
        $password = comrpovarPassL($_POST['passwordL']);

        if($email && $password){
            $desencryptedPassword = password_verify($password, hashPassword($email));
            if($desencryptedPassword){
                //reCaptcha si sobra temps
                //Creem sessió amb l'email i la durada sera de 30 minuts
                ini_set('session.gc_maxlifetime', 1800);
                $_SESSION['email'] = $email;
                
                header('Location: ../index.php');
            }else echo "<br>Contrasenya incorrecta";
        }
    }
}

//Guardar valors
function saveEmailL(){
    if(isset($_POST['emailL'])){
        $email = htmlspecialchars($_POST['emailL']);
        return $email;
    }
}

?>