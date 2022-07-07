<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT *  FROM alumno";
$query = mysqli_query($con, $sql);
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
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end header inner -->
                  </header>
                  <section>
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-md-5">
                              <div class="full slider_cont_section">
                                 <h4>SEGUROS ONLINE</h4>
                                 <h3>FIU!</h3>
                                 <p>Viaja seguro con tu auto. Elige entre diferentes opciones de seguros</p>
                                 <div class="button_section">
                                    <a href="#about">Cotiza Ahora</a>
                                    <a href="cotizacion.php">Cotizaciones</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-7">
                              <div id="slider_main" class="carousel slide" data-ride="carousel">
                                 <!-- The slideshow -->
                                 <div class="carousel-inner">
                                    <div class="carousel-item active">
                                       <img src="images/slider_1.png" alt="#" />
                                    </div>
                                    <div class="carousel-item">
                                       <img src="images/slider_2.png" alt="#" />
                                    </div>
                                 </div>
                                 <div class="full center">
                                    <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                                       <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#slider_main" data-slide="next">
                                       <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
                  <!-- end header -->
               </div>
            </div>
         </section>
         <!-- end section -->

         <!-- section -->
         <center>
            <div id="about" class="section layout_padding">
               <div class="container">

                  <div class="row">
                     <h1>Compartenos los datos del auto</h1>

                     <div class="col-lg-4 margin_top_30">
                        <div class="full margin_top_30">
                           <form action="insertar.php" method="POST">
                              <table>
                                 <tr>
                                    <td><label>Año</label></td>
                                    <td>
                                       <select type="text" class="form-control mb-3" name="ano">
                                          <option selected disabled="">Selecciona</option>
                                          <option value="2010">2010</option>
                                          <option value="2011">2011</option>
                                          <option value="2012">2012</option>
                                          <option value="2013">2013</option>
                                          <option value="2014">2014</option>
                                          <option value="2015">2015</option>
                                          <option value="2016">2016</option>
                                          <option value="2017">2017</option>
                                          <option value="2018">2018</option>
                                          <option value="2019">2019</option>
                                          <option value="2020">2020</option>
                                          <option value="2021">2021</option>
                                          <option value="2022">2022</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><label>Marca</label></td>
                                    <td>
                                       <select type="text" class="form-control mb-3" name="marca">
                                          <option selected disabled="">Selecciona</option>
                                          <option value="acura">Acura</option>
                                          <option value="alfa romeo">Alfa Romeo</option>
                                          <option value="audi">Audi</option>
                                          <option value="baic">Baic</option>
                                          <option value="bmw">BMW</option>
                                          <option value="buick">Buick</option>
                                          <option value="cadillac">Cadillac</option>
                                          <option value="chevrolet">Chevrolet</option>
                                          <option value="chrysler">Chrysler</option>
                                          <option value="fiat">Fiat</option>
                                          <option value="ford">Ford</option>
                                          <option value="honda">Honda</option>
                                          <option value="hyundai">Hyundai</option>
                                          <option value="infiniti">Infiniti</option>
                                          <option value="jac">Jac</option>
                                          <option value="kia">Kia</option>
                                          <option value="land rover">Land Rover</option>
                                          <option value="lincoln">Lincoln</option>
                                          <option value="mazda">Mazda</option>
                                          <option value="mercedes Benz">Mercedes Benz</option>
                                          <option value="mg">Mg</option>
                                          <option value="mini Cooper">Mini Cooper</option>
                                          <option value="mitsubishi">Mitsubishi</option>
                                          <option value="nissan">Nissan</option>
                                          <option value="peugeot">Honda</option>
                                          <option value="porshe">Porshe</option>
                                          <option value="renault">Renault</option>
                                          <option value="seat">Seat</option>
                                          <option value="subaru">Subaru</option>
                                          <option value="suzuki">Suzuki</option>
                                          <option value="tesla">Tesla</option>
                                          <option value="toyota">Toyota</option>
                                          <option value="volkswagen">Volkswagen</option>
                                          <option value="volvo">Volvo</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><label>Modelo</label></td>
                                    <td>
                                       <select type="text" class="form-control mb-3" name="modelo">
                                          <option selected disabled="">Selecciona</option>
                                          <option value="cx-3">CX-3</option>
                                          <option value="cx-30">CX-30</option>
                                          <option value="cx-5">CX-5</option>
                                          <option value="cx-9">CX-9</option>
                                          <option value="mazda 2">Mazda 2</option>
                                          <option value="mazda 3">Mazda 3</option>
                                          <option value="mazda 6">Mazda 6</option>
                                          <option value="mx-5">MX-5</option>
                                       </select>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><label>Línea</label></td>
                                    <td>
                                       <select type="text" class="form-control mb-3" name="linea">
                                          <option selected disabled="">Selecciona</option>
                                          <option value="basico">Basico</option>
                                          <option value="estandar equipado">Estandar Equipado</option>
                                          <option value="estandar de lujo">Estandar de Lujo</option>
                                          <option value="deportivo">Deportivo</option>
                                          <option value="automatico equipado">Automatico Equipado</option>
                                       </select>
                                    </td>
                                 </tr>
                              </table>

                              <input type="submit" class="btn btn-primary">
                           </form>
                        </div>

                        <div class="col-lg-8">
                           <div class="full margin_top_50_rs">
                              <img class="img-responsive" src="images/about_us.png" alt="#" />
                           </div>
                        </div>
                        <div class="button_section">
                           <a style="width: 80%;" href="#contact">Registrar Mis Datos</a>
                        </div>

                     </div>

                  </div>
               </div>
         </center>
         <!-- end section -->



         <!-- section -->
         <center>
            <div id="contact" class="section layout_padding">
               <div class="container">

                  <div class="row">
                     <h1>Datos del Conductor</h1>

                     <div class="col-lg-4 margin_top_30">
                        <div class="full margin_top_30">
                           <form action="insertar2.php" method="POST">
                              <table>
                                 <tr>
                                    <td><label>Selecciona tu sexo</label></td>
                                    <td>
                                       <input type="Radio" name="genero" value="masculino">Masculino<br>
                                       <input type="Radio" name="genero" value="femenino">Femenino<br>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><label>Fecha de nacimiento</label></td>
                                    <td><input type="date" name="nacimiento" placeholder="Fecha de Nacimiento">
                        </div>
                        </td>
                        </tr>
                        <tr>
                           <td><label>Correo Electrónico</label></td>
                           <td>
                              <input type="email" class="form-control mb-3" name="correo" placeholder="Correo Electrónico">
                           </td>
                        </tr>
                        <tr>
                           <td><label>Teléfono</label></td>
                           <td>
                              <input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono">
                           </td>
                        </tr>
                        <tr>
                           <td><label>Código Postal</label></td>
                           <td>
                              <input type="text" class="form-control mb-3" name="postal" placeholder="Código Postal">
                           </td>
                        </tr>
                        <tr>
                           <td><label>Código de Promoción</label></td>
                           <td>
                              <input type="text" class="form-control mb-3" name="codigo" placeholder="Código de Promoción">
                           </td>
                        </tr>
                        </table>

                        <input type="submit" class="btn btn-primary">
                        </form>
                     </div>

                     <div class="col-lg-8">
                        <div class="full margin_top_50_rs">
                           <img class="img-responsive" src="images/about_us_2.png" alt="#" />
                        </div>
                        <div class="button_section">
                           <a style="width: 110%;" href="#about">Registrar Mi Auto</a>
                        </div>
                     </div>

                  </div>

               </div>
            </div>
         </center>

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