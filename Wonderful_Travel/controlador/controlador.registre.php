<?php
require_once '../model/model.registre.php';
require_once 'controlador.comprovacions.php';

if(isset($_POST['register'])){
    function comprovacionsR(){
        $email = comprovarEmail($_POST['emailR']);
        $username = comprovarUsername($_POST['usernameR']);
        $password1 = comprovarPassword($_POST['passwordR1']);
        $password2 = $_POST['passwordR2'];
    
        if(empty($password1) || empty($password2)){
            echo "Una de les contrasenyes està buida<hr>";
        }

        if($email && $username && $password1 && $password2){
            if($password1 == $password2){
                $password = password_hash($password1, PASSWORD_DEFAULT);
                if($password){
                    //comprovar que l'usuari no existeixi
                    if(existeixUsuari($username)){
                        //comprovar que l'email no existeixi
                        if(existeixEmail($email)){
                            //insertar l'usuari a la BD
                            insertarUsuari($username, $email, $password);
                            header("Location: ../vista/login.vista.php");
                        }else{
                            echo "El email ja existeix<hr>";
                        }
                    }else{
                        echo "El nom d'usuari ja existeix<hr>";
                    }
                }
            }else echo "Les contrasenyes no coincideixen<hr>";
        }
    }
}
//Guardar valors
function saveEmailR(){
    if(isset($_POST['emailR'])){
        $email = htmlspecialchars($_POST['emailR']);
        return $email;
    }
}

function saveUsernameR(){
    if(isset($_POST['usernameR'])){
        $username = htmlspecialchars($_POST['usernameR']);
        return $username;
    }
}
?>