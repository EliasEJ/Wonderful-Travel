<?php
require_once '../model/model.canviarPass.php';
require_once '../model/model.recuperarContrasenya.php';
require_once 'controlador.comprovacions.php';

//Agafem l'id i el token de la url i la guardem abans de que canvi
session_start();
if(!isset($_SESSION['idR'])){
    $_SESSION['idR'] = $_GET['id'];
    $_SESSION['tokenR'] = $_GET['token'];
}

function comprovacionsCanviarPass(){
    $id = $_GET['id'];
    $token = $_GET['token'];

    //comprovar que el token no hagi caducat
    obtenirToken($id);

    if(isset($_POST['canviar'])){
        $actualPassword = $_POST['actualPass'];
        $password1 = comprovarPassword($_POST['newPass']);
        $password2 = $_POST['confirmNewPass'];

        if(comprovarActualPass($actualPassword, $id)){
            if(!empty($password1) || !empty($password2)){
                if($password1 == $password2){
                    if(comprovarPassBD($password1, $id)){
                        $hashedPassword = password_hash($password1, PASSWORD_DEFAULT);
                        canviarPassword($hashedPassword, $id, $token);
                    }else echo "La contrasenya nova es la mateixa que l'anterior<hr>";
                }else echo "Les contrasenyes noves no coincideixen<hr>";
            }else echo "Una de les contrasenyes noves està buida<hr>";
        }
    }
}
?>