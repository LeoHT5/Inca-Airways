<?php 
      session_start();
      $nombre = $_SESSION['nombre'] ?? '';
      $apellido = $_SESSION['apellido'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">

   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>

<body>
   <div class="header_section">
      <div class="header_main">         
         <div class="container-fluid">
            <div class="logo"><a href="INICIO.html" style="color: white; font-size: 40px;">INCA AIRWAYS</a></div>
            <div class="menu_main">
               <ul>
                  <li class="active"><a href="INICIO.html">Inicio</a></li>
                  <li><a href="DESTINOS.php">Destinos</a></li>
                  <li><a href="REGISTRO.php">Regístrate</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>

   <div class="services_section layout_padding">
      <div class="container">
         <h1 class="services_taital">Destinos</h1>
         <p class="services_text">
            Nos enorgullece ofrecer vuelos a algunos de los destinos más 
            populares y fascinantes del mundo. ¿Te gustaría descubrir las 
            maravillas de Machu Picchu en Perú? ¿O prefieres deleitarte 
            con la exquisita cocina italiana en las calles de Roma?,
            pues estos son algunos de los destino que tenemos para ti:
         </p>
         <div class="services_section_2">
            <div class="row">
               <div class="col-md-4">
                  <div><img src="images/img-1.jpg" class="services_img"></div>
                  <div class="btn_main"><a href="RESERVA.php?destino=Cuzco">Reservar</a></div>
               </div>
               <div class="col-md-4">
                  <div><img src="images/img-2.png" class="services_img"></div>
                  <div class="btn_main active"><a href="RESERVA.php?destino=Roma">Reservar</a></div>
               </div>
               <div class="col-md-4">
                  <div><img src="images/img-3.jpg" class="services_img"></div>
                  <div class="btn_main"><a href="RESERVA.php?destino=Londres">Reservar</a></div>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div><img src="images/img-4.jpg" class="services_img"></div>
                     <div class="btn_main"><a href="RESERVA.php?destino=Madrid">Reservar</a></div>
                  </div>
                  <div class="col-md-4">
                     <div><img src="images/img-5.jpg" class="services_img"></div>
                     <div class="btn_main active"><a href="RESERVA.php?destino=Nueva York">Reservar</a></div>
                  </div>
                  <div class="col-md-4">
                     <div><img src="images/img-6.jpg" class="services_img"></div>
                     <div class="btn_main"><a href="RESERVA.php?destino=Sydney">Reservar</a></div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>

   <div class="footer_section layout_padding">
      <div class="container">
        
         <div class="location_main">
            <div class="call_text"><img src="images/call-icon.png"></div>
            <div class="call_text"><a href="#">CONTÁCTANOS: <br> +51 953223299 <br> +51 924350233 <br> +51 932108814 <br> +51 972472033</a></div>
            <div class="call_text"><img src="images/mail-icon.png"></div>
            <div class="call_text"><a href="#">inca_airways@gmail.com <br> inca_airways@hotmail.com</a></div>
         </div>
         <div class="social_icon">
            <ul>
               <li><a href="#"><img src="images/fb-icon.png"></a></li>
               <li><a href="#"><img src="images/twitter-icon.png"></a></li>
               <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
               <li><a href="#"><img src="images/instagram-icon.png"></a></li>
            </ul>
         </div>
      </div>
   </div>

   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>

   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>

   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>