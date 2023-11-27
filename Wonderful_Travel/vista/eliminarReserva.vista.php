<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar reserva</title>
    </head>
    <body>
        <?php
            echo '<script language="javascript">alert("Segur que vols eliminar la reserva?");</script>';
            require_once '../model/model.eliminarReserva.php';
            eliminarReserva();
        ?>
    </body>
</html>