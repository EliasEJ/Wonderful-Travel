<?php
function comprovarEmail($email){
    if(empty($email)){
        echo "<br>El email no pot estar buit";
    }else{
        return $email;
    }
}

function comprovarUsername($username){
    if(empty($username)){
        echo "<br>El nom d'usuari no pot estar buit";
    }else{
        return $username;
    }
}

function comprovarPassword($password){
    if(empty($password)){
        echo "<br>La contrasenya no pot estar buida";
    }else{
        if(strlen($password) < 4 || strlen($password) > 15){
            echo "<br>La contrasenya ha de tenir entre 4 i 15 caràcters";
        }else{
            if(!preg_match('`[a-z]`',$password)){
                echo "<br>La contrasenya ha de tenir almenys una lletra minúscula";
            }else{
                if(!preg_match('`[A-Z]`',$password)){
                    echo "<br>La contrasenya ha de tenir almenys una lletra majúscula";
                }else{
                    if(!preg_match('`[0-9]`',$password)){
                        echo "<br>La contrasenya ha de tenir almenys un número";
                    }else{
                        return $password;
                    }
                }
            }
        }
    }
}
?>