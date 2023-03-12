<?php
include("conexion.php");
$con =conec();

$id_cliente = $_GET['id_cliente'];

$sql = "SELECT * FROM  registro";
$query = mysqli_query($con, $sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_table.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>
    <p>hola</p>
    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>TIPO MASCOTA</th>
                    <th>MASCOTA</th>
                    <th>CORREO</th>
                    <th>FECHA</th>
                    <th>DNI</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_cliente'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['apellido'] ?></th>
                        <th><?= $row['tipo_mascota'] ?></th>
                        <th><?= $row['nombre_mascota'] ?></th>
                        <th><?= $row['correo'] ?></th>
                        <th><?= $row['fecha_cita'] ?></th>
                        <th><?= $row['dni'] ?></th>
                        <th><a href="" class="users-table--edit">Editar</a></th>
                        <th><a href="delete.php?id_cliente<?= $row['id_cliente'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

