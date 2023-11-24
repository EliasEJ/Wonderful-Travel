<?php
function tancarSessio(){
    if(isset($_POST['closeSession'])){
        session_start();
        session_destroy();
        header('Location: ../index.php');
        exit();
    }
}
?>