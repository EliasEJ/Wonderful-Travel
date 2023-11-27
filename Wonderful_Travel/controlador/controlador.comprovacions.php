<?php
function comprovarEmail($email){
    if(empty($email) || !comprovarEmailVerdader($email)){
        echo "El correu electrònic no pot estar buit i ha de ser correcte<hr>";
        return false;
    }else{
        return $email;
    }
}

function comprovarEmailVerdader($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }

}

function comprovarUsername($username){
    if(empty($username)){
        echo "El nom d'usuari no pot estar buit<hr>";
        return false;
    }else{
        return $username;
    }
}

function comprovarPassword($password){
    if(empty($password)){
        return false;
    }else{
        if(strlen($password) < 4 || strlen($password) > 15 || !preg_match('`[a-z]`',$password) || !preg_match('`[A-Z]`',$password) || !preg_match('`[0-9]`',$password)){
            echo "La contrasenya ha de tenir entre 4 i 15 caràcters, almenys una lletra minúscula i majúscula i un número<hr>";
        }else{
            return $password;
        }
    }
}
function comrpovarPassL($password){
    if(empty($password)){
        return false;
    }else{
        if(strlen($password) < 4 || strlen($password) > 15 || !preg_match('`[a-z]`',$password) || !preg_match('`[A-Z]`',$password) || !preg_match('`[0-9]`',$password)){
            echo "Contrasenya incorrecta<hr>";
        }else{
            return $password;
        }
    }
}
?>