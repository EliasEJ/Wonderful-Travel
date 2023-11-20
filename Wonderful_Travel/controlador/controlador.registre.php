<?php
require_once 'model/model.registre.php';

function comprovacions(){
    $email = comprovarEmail($_POST['emailR']);
    $username = comprovarUsername($_POST['usernameR']);
    $password1 = comprovarPassword($_POST['passwordR1']);
    $password2 = comprovarPassword($_POST['passwordR2']);

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
                        header('Location: ../');
                    }else{
                        echo "<br>El email ja existeix";
                    }
                }else{
                    echo "<br>El nom d'usuari ja existeix";
                }
            }
        }
    }
}
?>