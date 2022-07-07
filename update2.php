<?php

include("conexion.php");
$con = conectar();

$genero = $_POST['genero'];
$nacimiento = $_POST['nacimiento'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$postal = $_POST['postal'];
$codigo = $_POST['codigo'];

$sql2 = "UPDATE conductor SET  genero='$genero',nacimiento='$nacimiento',correo='$correo',telefono='$telefono',postal='$postal',codigo='$codigo' WHERE correo='$correo'";
$query2 = mysqli_query($con, $sql2);

if ($query2) {
    Header("Location: cotizacion.php");
}
