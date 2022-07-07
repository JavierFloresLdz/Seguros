<?php

include("conexion.php");
$con = conectar();

$ano = $_POST['ano'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$linea = $_POST['linea'];

$sql = "UPDATE alumno SET  marca='$marca',modelo='$modelo',linea='$linea' WHERE ano='$ano'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: cotizacion.php");
}
