<?php
require_once '../model/model.recuperarContrasenya.php';
require_once '../controlador/controlador.comprovacions.php';

//Importacio de la llibreria PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Carguem els fitxers de la llibreria PHPMailer
require 'PHPMailer-master\src\Exception.php';
require 'PHPMailer-master\src\PHPMailer.php';
require 'PHPMailer-master\src\SMTP.php';

function saveEmailRecuperar(){
    if(isset($_POST['emailRecuperar'])){
        return $_POST['emailRecuperar'];
    }else {
        return "";
    }
}
if(isset($_POST['login'])){
    function comprovarEmailRecuperar(){
        $email = saveEmailRecuperar();
        if($email != "" && comprovarEmailVerdader($email)){
            return true;
        }else{
            echo "El correu electrònic no pot estar buit i ha de ser vàlid<hr>";
            return false;
        }
    }
    function comprovarEmailExisteix(){
        $email = saveEmailRecuperar();
        if(comprovarEmailRecuperar() && comprovarEmailExisteixModel($email)){
                return true;
            }else{
                echo "El correu electrònic no existeix<hr>";
                return false;
            }
    }
    
    function comprovacionsL(){
        if(comprovarEmailRecuperar() && comprovarEmailExisteix()){
            $email = saveEmailRecuperar();
            //obtenir id de l'usuari a partir de l'email
            $id = idUsuariRecuperar($email);
            //crear token
            crearToken($id);
            //obtenir token
            $token = obtenirToken($id);
            if(isset($token)){
                $link = "http://localhost/Proyecto/Wonderful-Travel/Wonderful_Travel/vista/canviarPass.vista.php?id=".$id."&token=".$token;
                $missatge = "Has demanat recuperar la contrasenya, si vols recuperar-la clica al següent enllaç: ".$link;
                enviarCorreu($email, "Recuperar contrasenya", $missatge);
            }
        }
    }
    
    function enviarCorreu($email, $subject, $message){
    
            
        $mail = new PHPMailer(true);
        
        try {
    
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'testdevirusyprovas@gmail.com';                     //SMTP username
            $mail->Password   = 'yxnd lamp xauk hrzr';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom($email);
            $mail->addAddress($email);               //Name is optional
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
        
            $mail->send();
            if($mail->send()){
                header("Location: ./enviarEmail.vista.php");
            }
        } catch (Exception $e) {
            echo "Algo ha fallat: {$mail->ErrorInfo}<hr>";
        }
    
    }
}
?>