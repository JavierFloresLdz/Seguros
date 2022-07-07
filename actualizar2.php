<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql2 = "SELECT * FROM conductor WHERE correo='$id'";
$query2 = mysqli_query($con, $sql2);

$row = mysqli_fetch_array($query2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="update2.php" method="POST">

            <input type="hidden" name="correo" value="<?php echo $row['correo']  ?>">

            <input type="text" class="form-control mb-3" name="genero" placeholder="Género" value="<?php echo $row['genero']  ?>">
            <input type="text" class="form-control mb-3" name="nacimiento" placeholder="Fecha de Nacimiento" value="<?php echo $row['nacimiento']  ?>">
            <input type="text" class="form-control mb-3" name="correo" placeholder="Correo Electrónico" value="<?php echo $row['correo']  ?>">
            <input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono" value="<?php echo $row['telefono']  ?>">
            <input type="text" class="form-control mb-3" name="postal" placeholder=" Código Postal" value="<?php echo $row['postal']  ?>">
            <input type="text" class="form-control mb-3" name="codigo" placeholder="Código de Promoción" value="<?php echo $row['codigo']  ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>