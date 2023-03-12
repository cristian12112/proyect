<?php
include("conexion.php");
$con = conec(); 

$nombre         = $_POST['filter_nombre'];
$apellido       = $_POST['filter_apellido'];
$tipo_mas       = $_POST['filter_tipo_mas'];
$pm_email       = $_POST['filter_email'];
$nom_mascota    = $_POST['filter_nom_mascota'];
$fecha          = $_POST['filter_fecha_cita'];
$dni            = $_POST['filter_dni'];

$sql = "INSERT INTO registro VALUES(null,'$nombre', '$apellido', '$tipo_mas', '$nom_mascota', '$pm_email', '$fecha', '$dni')";
$query = mysqli_query($con,$sql);

echo "Generando Cita... <br>";

?>