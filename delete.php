<?php

include('conexion.php');
$con = conec();

$id_cliente=$_GET["id_cliente"];

$sql="DELETE FROM registro WHERE id_cliente='$id_cliente'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>