<?php
include("conexion.php");
$con = conectar();

$genero = $_POST['genero'];
$nacimiento = $_POST['nacimiento'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$postal = $_POST['postal'];
$codigo = $_POST['codigo'];


$sql = "INSERT INTO conductor VALUES('$genero','$nacimiento','$correo','$telefono','$postal','$codigo')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: index.php");
} else {
}
