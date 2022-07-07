<?php

include("conexion.php");
$con = conectar();

$correo = $_GET['id'];

$sql2 = "DELETE FROM conductor  WHERE correo='$correo'";
$query2 = mysqli_query($con, $sql2);

if ($query2) {
    Header("Location: cotizacion.php");
}
