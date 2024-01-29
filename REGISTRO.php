<?php 
      include("php/controlador.php");
      registrar();
?>

<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

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

   <div class="contact_section layout_padding">
      <div class="container">
         <h1 class="contact_taital">¡Ingrese sus datos!</h1>
         <div class="email_text">   
            <form method="post">
               <div class="form-group">
                  <input type="text" class="email-bt" placeholder="Nombre" name="nombre" id="nombre">
               </div>
               <div class="form-group">
                  <input type="text" class="email-bt" placeholder="Apellido" name="apellido" id="apellido">
               </div>
               <div class="form-group">
                  <input type="date" class="email-bt" placeholder="Fecha de Nacimiento" name="fecNac" id="fecnac">
               </div>
               <div class="form-group">
                  <input type="text" class="email-bt" placeholder="Dirección" name="direccion" id="direccion">
               </div>
               <div class="form-group">
                  <input type="text" class="email-bt" placeholder="Teléfono" name="telefono" id="telefono">
               </div>
               <div class="form-group">
                  <input type="text" class="email-bt" placeholder="Correo" name="email" id="email">
               </div>
               <div class="send_btn"><input type="submit" value="Confirmar" name="confirmar" class="btn btn-dark"></div>
            </form>
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