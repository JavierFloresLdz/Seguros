<?php

include("conexion.php");
$con = conectar();

$ano = $_GET['id'];

$sql = "DELETE FROM alumno  WHERE ano='$ano'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: cotizacion.php");
}
