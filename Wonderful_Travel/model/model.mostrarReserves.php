<?php
require_once 'conn.php';

function mostrarReserves($email)
{
    $conn = con();
    $sql = $conn->prepare('SELECT * FROM reserves WHERE usuari = ?');
    $sql->execute(array(
        $email,
    ));
    $resultat = $sql->fetchAll();
    if (count($resultat) > 0) {
        echo '<div class="container">';
        echo '<h2 class="center">Reserves</h2>';
        echo '<table class="table table-striped">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">Destí</th>';
        echo '<th scope="col">Preu</th>';
        echo '<th scope="col">Nom</th>';
        echo '<th scope="col">Telèfon</th>';
        echo '<th scope="col">Persones</th>';
        echo '<th scope="col">Data</th>';
        echo '<th scope="col">Eliminar</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($resultat as $reserva) {
        echo '<tr>';
        echo '<td>' . $reserva['desti'] . '</td>';
        echo '<td>' . $reserva['preu'] . '</td>';
        echo '<td>' . $reserva['nom'] . '</td>';
        echo '<td>' . $reserva['telf'] . '</td>';
        echo '<td>' . $reserva['numPersones'] . '</td>';
        echo '<td>' . $reserva['dataReserva'] . '</td>';
        echo '<td><a href="model/model.eliminarReserva.php?id=' . $reserva['id'] . '">Eliminar<i class="fas fa-trash-alt"></i></a></td>';
        echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    }else{
        //Aquí es pot mostrar que no hi ha reserves, no ho volem en el nostre cas
    }
}
?>