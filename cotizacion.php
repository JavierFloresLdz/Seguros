<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT *  FROM alumno";
$query = mysqli_query($con, $sql);

$sql2 = "SELECT *  FROM conductor";
$query2 = mysqli_query($con, $sql2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>FIU! SEGUROS ONLINE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="images/logo.png" />
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

</head>

<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>
    <!-- end loader -->

    <div class="wrapper">

        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li class="active">
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#why_choose_us">why Choose Us</a>
                    </li>
                    <li>
                        <a href="#testimonial">Testimonial</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>

            </nav>
        </div>


        <div id="content">


            <!-- section -->
            <section id="home" class="top_section">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- header -->
                        <header>
                            <!-- header inner -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 logo_section">
                                        <div class="full">
                                            <div class="center-desk">
                                                <div class="logo"> <a href="index.php"><img style="width: 50%;" src="images/logo6.png" alt="#"></a> </div>
                                            </div>
                                            <div class="button_section">
                                                <a href="index.php">Regresar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end header inner -->
                        </header>
                        <section>
                            <div class="container mt-5">
                                <div class="row">


                                    <div class="col-md-8">
                                        <div class="col-md-8">
                                            <h1 style="color: white;">Datos del Auto</h1>
                                        </div>
                                        <table class="table" border="5px">
                                            <thead class="table-success table-striped">
                                                <tr>
                                                    <th>Año</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Línea</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody style="color: white;">
                                                <?php
                                                while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                    <tr>
                                                        <th><?php echo $row['ano'] ?></th>
                                                        <th><?php echo $row['marca'] ?></th>
                                                        <th><?php echo $row['modelo'] ?></th>
                                                        <th><?php echo $row['linea'] ?></th>
                                                        <th><a href="actualizar.php?id=<?php echo $row['ano'] ?>" class="btn btn-info">Editar</a></th>
                                                        <th><a href="delete.php?id=<?php echo $row['ano'] ?>" class="btn btn-danger">Eliminar</a></th>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>



                                    <div class="col-md-8">
                                        <div class="col-md-8">
                                            <h1 style="color: white;">Datos del Conductor</h1>
                                        </div>
                                        <table class="table" border="5px">
                                            <thead class="table-success table-striped">
                                                <tr>
                                                    <th>Género</th>
                                                    <th>Fecha de Nacimiento</th>
                                                    <th>Correo Electrónico</th>
                                                    <th>Teléfono</th>
                                                    <th>Código Postal</th>
                                                    <th>Código de Promoción</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody style="color: white;">
                                                <?php
                                                while ($row = mysqli_fetch_array($query2)) {
                                                ?>
                                                    <tr>
                                                        <th><?php echo $row['genero'] ?></th>
                                                        <th><?php echo $row['nacimiento'] ?></th>
                                                        <th><?php echo $row['correo'] ?></th>
                                                        <th><?php echo $row['telefono'] ?></th>
                                                        <th><?php echo $row['postal'] ?></th>
                                                        <th><?php echo $row['codigo'] ?></th>
                                                        <th><a href="actualizar2.php?id=<?php echo $row['correo'] ?>" class="btn btn-info">Editar</a></th>
                                                        <th><a href="delete2.php?id=<?php echo $row['correo'] ?>" class="btn btn-danger">Eliminar</a></th>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- end header -->
                    </div>
                </div>
            </section>
            <!-- end section -->
            <!-- footer -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="full">
                                <h3>FIU!</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="full">
                                <ul class="social_links">
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="full">
                                <h4 class="widget_heading">Enlaces</h4>
                            </div>
                            <div class="full f_menu">
                                <ul>
                                    <li><a href="#">Inicio</a></li>
                                    <li><a href="#">Sobre Nosotros</a></li>
                                    <li><a href="#">Servicios</a></li>
                                    <li><a href="#">Comentarios</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end footer -->

            <!-- copyright -->

            <div class="cpy_right">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <p>© 2022 Desarrollado por <a href="#">Francisco Javier Flores Ledezma</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- right copyright -->

        </div>
    </div>

    <div class="overlay"></div>

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Scrollbar Js Files -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/location_point.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->

</body>

</html>