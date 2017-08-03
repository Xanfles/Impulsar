<?php
$codigo = $_REQUEST["codigo"];
if ($codigo != "") {
    $conexion = mysqli_connect("localhost", "root", "", "ClusterImpulsar") or die("Problemas de conección a la base de datos");
    $sql = "UPDATE Asistentes SET Asistencia=True WHERE(CodigoEntrada='" . $codigo . "')";
    $resul = mysqli_query($conexion,$sql);
    $dato = boolval($resul);
    echo $dato;
} else {
    echo "El código no puede ser nulo";
}
?>

