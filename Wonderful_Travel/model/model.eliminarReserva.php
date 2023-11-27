<?php
require_once 'conn.php';

function eliminarReserva(){
    $conn = con();
    $id = $_GET['id'];
    $sql = $conn->prepare('DELETE FROM reserves WHERE id = ?');
    $sql->execute(array(
        $id,
    ));
    if($sql->rowCount() > 0){
        echo '<script language="javascript">alert("Reserva eliminada correctament");</script>';
    }else{
        echo '<script language="javascript">alert("Error al eliminar la reserva");</script>';
    }
    header('Location: ../index.php');
}
?>