<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Viata Inmobiliaria .: Servicios Inmobiliarios</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/lightbox.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" />
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/morph/component.css" />
        <link rel="stylesheet" type="text/css" href="css/morph/content.css" />
        <link rel="stylesheet" type="text/css" href="css/morph/demo.css" />
        <link rel="stylesheet" href="css/wpp/floating-wpp.min.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header class="side-header">
          <div class="hero">

             <div class="barra clearfix fixed">
               <div class="contenedor ">
                  <div class="logo">
                    <a href="index.php">
                      <img src="img/Pyramid-logo.png" alt="Logo">
                    </a>
                    <a href="index.php">                    
                      <img id="logo_name" src="img/Pyramid-name-2.png" alt="Logo">
                    </a>
                     <!-- <h1 class="nombre-sitio-menu">Inmobiliaria BABEL</h1> -->
                  </div>

                  <div class="menu-movil">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>

                  <nav class="navegacion-principal clearfix">
                     <a class="" href="index.php">Inicio</a>
                     <a href="como_funciona.php">¿Cómo funciona?</a>
                     <ul class="nav">
                       <li><a href="#nuestros_servicios">Servicios</a>
                          <ul>
                            <li><a href="compra_venta.php">Compra y venta</a></li>
                            <li><a href="arriendo.php">Arriendo</a></li>
                            <li><a href="avaluos.php">Avalúos</a></li>
                            <li><a href="asesorias.php">Asesorias</a></li>
                          </ul>
                       </li>
                     </ul>
                     <a id="contactoMenu">Contáctanos</a>
                     <!-- <a href="#">Iniciar Sesión</a> -->
                  </nav>
               </div><!--.contenedor-->
            </div><!--.barra-->

             <div class="contenido-header">
                <nav class="redes-sociales">
                   <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                   <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                   <a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                   <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </nav>
                   <div class="informacion-evento">
                      <!-- <div class="clearfix">
                        <p class="fecha"><i class="fa fa-calendar" aria-hidden="true"></i> 10 - 12 Diciembre</p>
                        <p class="ciudad">Madrid, Cundinamarca <i class="fa fa-map-marker" aria-hidden="true"></i></p>
                      </div> -->
                      <br>

                      <h1 class="nombre-sitio">Estamos en mantenimiento</h1>
                      <p class="slogan">En este momento estamos mejorando para tu comodidad</p> <br>
                      <p class="slogan"><span>Por favor visítanos más tarde</span></p>
                   </div><!--.informacion-evento-->
                </div><!--.contenido-header-->
             </div><!--.hero-->
        </header>

        <script type="text/javascript" src="js/jquery/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/wpp/floating-wpp.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>        
        <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.lettering.js"></script>
        <script src="js/lightbox.js"></script>
        <script src="js/main.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>        
        <script src="js/datepicker/datepicker.min.js"></script>
        <script src="js/datepicker/i18n/datepicker.en.js"></script>

        <script src="js/morph/classie.js"></script>
        <script src="js/morph/uiMorphingButton_fixed.js"></script>
        <script src="js/morph/modernizr.custom.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        <script>
          (function() {
            var docElem = window.document.documentElement, didScroll, scrollPosition;

            // trick to prevent scrolling when opening/closing button
            function noScrollFn() {
              window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
            }

            function noScroll() {
              window.removeEventListener( 'scroll', scrollHandler );
              window.addEventListener( 'scroll', noScrollFn );
            }

            function scrollFn() {
              window.addEventListener( 'scroll', scrollHandler );
            }

            function canScroll() {
              window.removeEventListener( 'scroll', noScrollFn );
              scrollFn();
            }

            function scrollHandler() {
              if( !didScroll ) {
                didScroll = true;
                setTimeout( function() { scrollPage(); }, 60 );
              }
            };

            function scrollPage() {
              scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
              didScroll = false;
            };

            scrollFn();

            [].slice.call( document.querySelectorAll( '.morph-button' ) ).forEach( function( bttn ) {
              new UIMorphingButton( bttn, {
                closeEl : '.icon-close',
                onBeforeOpen : function() {
                  // don't allow to scroll
                  noScroll();
                },
                onAfterOpen : function() {
                  // can scroll again
                  canScroll();
                },
                onBeforeClose : function() {
                  // don't allow to scroll
                  noScroll();
                },
                onAfterClose : function() {
                  // can scroll again
                  canScroll();
                }
              } );
            } );

            // for demo purposes only
            [].slice.call( document.querySelectorAll( 'form button' ) ).forEach( function( bttn ) { 
              bttn.addEventListener( 'click', function( ev ) { ev.preventDefault(); } );
            } );
          })();
        </script>
    </body>
</html>

<?php
$from = 'contacto@inmobiliariapyramid.com';
$to = $_POST['email'];
$subject = "Contacto Inmobiliaria Pyramid";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<h2>Hola " . $_POST['nombre'] . ",</h2><br>
<p>Hemos recibido un correo de tu parte con la siguiente información:<br><br>
<b>Nombre:</b> " . $_POST['nombre'] . "<br>
<b>Email:</b> " . $_POST['email'] . "<br>
<b>Teléfono:</b> " . $_POST['telefono'] . "<br><br>
Y el siguiente mensaje: <i><br><br>" . 
$_POST['mensaje'] . "</i><br><br>
Nos pondremos en contácto contigo muy pronto. Gracias por escogernos<br><br>
<b>Inmobiliaria Pyramid</b></p>
</body>
</html>";

// Always set content-type when sending HTML email
$headers='';
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: '.$from.' '. "\r\n";
$bool = mail($to,$subject,$message, $headers);

if($bool){
  echo "<script>";
  // echo "swal({";
  //   echo "title: "Datos incompletos",";
  //   echo "text: "Por favor ingresa tu número telefónico.",";
  //   echo "icon: "warning",";
  //   echo "dangerMode: true,";
  //   echo "});";
  echo "alert('Mensaje Enviado exitosamente. Nos pondremos en contacto contigo muy pronto');";
  echo "</script>";
}else{
  // echo "<script>";
  //   echo "alert('El mensaje no pudo ser enviado, por favor intentalo de nuevo');";
  // echo "</script>";
}
?>
