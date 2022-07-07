<?php
include("conexion.php");
$con = conectar();

$ano = $_POST['ano'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$linea = $_POST['linea'];


$sql = "INSERT INTO alumno VALUES('$ano','$marca','$modelo','$linea')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: index.php");
} else {
}
