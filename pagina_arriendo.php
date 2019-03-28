<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Inmueble en venta .: Inmobiliaria Pyramid</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
        <link rel="stylesheet" href="css/lightbox.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" />
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/morph/component.css" />
        <link rel="stylesheet" type="text/css" href="css/morph/content.css" />
        <link rel="stylesheet" type="text/css" href="css/morph/demo.css" />
        <link rel="stylesheet" href="css/datepicker_css/datepicker.min.css" type="text/css">
        <link rel="stylesheet" href="css/wpp/floating-wpp.min.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="conferencia">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header class="side-header">
           <?php
            include('global/header2.php');
          ?>
        </header>

        <?php
          $myId = $_GET['id'];
          /*** mysql hostname ***/
          $hostname = '147.135.87.130';
          /*** mysql username ***/
          $username = 'inmobi16_dbuser';
          /*** mysql password ***/
          $password = 'Inmopyd7890';

          try {
            $mbd = new PDO("mysql:host=$hostname;dbname=inmobi16_pyramiddb", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
            //foreach($mbd->query('SELECT * from ciudad') as $fila) {
            //    print_r($fila);
            //}
            //$mbd = null;
            $sth = $mbd->prepare("SELECT * FROM inmueble WHERE pk_inmueble = $myId");
            $sth->execute();

            while ($result = $sth->fetch(PDO::FETCH_ASSOC)) {
                echo '
                  <section id="galeria_fotos" class="seccion contenedor top_-180">
                  <h2>'.$result['nombre_inmueble'].'</h2>
                  <div class="galeria">
                    <a href="img/galeria/01.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/01.jpg">
                    </a>
                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                    <a href="img/galeria/02.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/02.jpg">
                    </a>
                    <a href="img/galeria/03.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/03.jpg">
                    </a>
                    <a href="img/galeria/04.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/04.jpg">
                    </a>
                    <a href="img/galeria/05.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/05.jpg">
                    </a>
                    <a href="img/galeria/06.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/06.jpg">
                    </a>
                    <a href="img/galeria/07.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/07.jpg">
                    </a>
                    <a href="img/galeria/08.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/08.jpg">
                    </a>
                    <a href="img/galeria/09.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/09.jpg">
                    </a>
                    <a href="img/galeria/10.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/10.jpg">
                    </a>
                  </div>
                 </section>

                  <section class="programa" id="info_inmueble">
                    <div class="contenedor-video">
                       <video autoplay loop poster="">
                          <source src="video/video.mp4" type="video/mp4">
                          <source src="video/video.webm" type="video/webm">
                          <source src="video/video.ogv" type="video/ogv">
                       </video>
                    </div><!--.contenedor-video-->

                    <div class="contenido-programa">
                       <div class="contenedor">
                          <div class="programa-evento">
                             <h2>Información del Inmueble</h2>
                             <nav class="menu-programa">
                                <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i> Detalles</a>
                                <a href="#conferencias"><i class="fas fa-comments" aria-hidden="true"></i> Descripción</a>
                                <a href="#seminarios" id="agenda_cita_link"><i class="fas fa-street-view" aria-hidden="true"></i> Agenda cita</a>
                             </nav>

                             <div id="talleres" class="info-curso ocultar clearfix">
                                <div class="detalle-evento items_detalle">
                                     <!-- <h3>Traumas de un bastardo</h3> -->
                                     <p><i class="fas fa-hand-holding-usd" aria-hidden="true"></i> <span class="ttl_info">Precio:</span> <b> 300.000.000</b></p>
                                     <p><i class="fas fa-dollar-sign" aria-hidden="true"></i> <span class="ttl_info">Administración:</span> <b> 200.000</b></p>
                                     <p><i class="fas fa-barcode" aria-hidden="true"></i> <span class="ttl_info">Código:</span> 1019</p>
                                     <p><i class="fas fa-home" aria-hidden="true"></i> <span class="ttl_info">Tipo Inmueble:</span> Apartamento</p>
                                     <p><i class="fas fa-city" aria-hidden="true"></i> <span class="ttl_info">Ciudad:</span> Bogotá </p>
                                     <p><i class="fas fa-map-marked-alt" aria-hidden="true"></i> <span class="ttl_info">Zona (Localidad):</span> Usaquén</p>
                                     <p><i class="fas fa-map-marker-alt" aria-hidden="true"></i> <span class="ttl_info">Barrio:</span> Cedritos</p>
                                     <p><i class="fa fa-user" aria-hidden="true"></i> <span class="ttl_info">Estrato:</span> 4</p>
                                     <p><i class="fas fa-ruler" aria-hidden="true"></i> <span class="ttl_info">Área total:</span> 200 m<sup>2</sup></p>
                                     <p><i class="fas fa-align-justify" aria-hidden="true"></i> <span class="ttl_info">Nro. pisos:</span> 2</p>
                                     <p><i class="fas fa-bed" aria-hidden="true"></i> <span class="ttl_info">Habitaciones:</span> 4</p>
                                     <p><i class="fas fa-pen-alt" aria-hidden="true"></i> <span class="ttl_info">Estudio:</span> Si</p>
                                     <p><i class="fas fa-bath" aria-hidden="true"></i> <span class="ttl_info">Baños:</span> 3</p>
                                     <p><i class="fas fa-door-open" aria-hidden="true"></i> <span class="ttl_info">Closet:</span> Si</p>
                                     <p><i class="fas fa-car" aria-hidden="true"></i> <span class="ttl_info">Parqueaderos:</span> 2</p>
                                     <p><i class="fas fa-house-damage" aria-hidden="true"></i> <span class="ttl_info">Antigüedad:</span> 6 años</p>
                                     <p><i class="fas fa-broom" aria-hidden="true"></i> <span class="ttl_info">Cuarto aseo:</span> Si</p>
                                     <p><i class="fas fa-wind" aria-hidden="true"></i> <span class="ttl_info">Aire acondicionado:</span> No</p>
                                     <p><i class="fas fa-dungeon" aria-hidden="true"></i> <span class="ttl_info">Balcón:</span> Si</p>
                                     <p><i class="fas fa-sort-amount-up" aria-hidden="true"></i> <span class="ttl_info">Ascensor:</span> Si</p>
                                     <p><i class="fas fa-archive" aria-hidden="true"></i> <span class="ttl_info">Deposito:</span> Si</p>
                                     <p><i class="fab fa-gripfire" aria-hidden="true"></i> <span class="ttl_info">Chimenea:</span> No</p>
                                     <p><i class="fas fa-umbrella-beach" aria-hidden="true"></i> <span class="ttl_info">Terraza:</span> Si</p>
                                </div>
                                
                                <!-- <a href="#" class="button float-right">Ver Todos</a> -->
                             </div><!--#talleres-->

                             <div id="conferencias" class="info-curso ocultar clearfix">
                                <div class="detalle-evento">
                                  <h3>General</h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                  quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                                </div>
                                <div class="detalle-evento">
                                  <h3>Sector</h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
                                </div>
                                <div class="detalle-evento">
                                  <h3>Vías de acceso</h3>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                  quis nostrud exercitation ullamco laboris nisi ut .</p>
                                </div>
                             </div><!--#talleres-->

                             <div id="seminarios" class="info-curso ocultar clearfix">
                                <div class="detalle-evento">                         
                                   <!-- <p><i class="fa fa-calendar" aria-hidden="true"></i> <input type="text" class="datepicker-here" data-timepicker="true" data-time-format="hh:ii aa" data-language="en" /></p> -->
                                   <p>Para agendar una visita a este inmueble, solo debes diligenciar estos datos y nos pondremos en contacto contigo lo antes posible.</p>
                                   <div id="agenda_cita" class="registro">
                                        <div class="div_agenda">
                                            <div class="campo_agenda">                                    
                                              <label for="nombre">Nombre completo: </label>
                                              <div>
                                                <i class="fas fa-user icon_form"></i>
                                                <input type="text" id="nombre" name="nombre" placeholder="" maxlength="40">
                                              </div>
                                            </div>
                                            <div class="campo_agenda">
                                              <label for="celular">Teléfono o Celular: </label>
                                              <div>
                                                <i class="fas fa-phone icon_form"></i>
                                                <input type="text" id="celular" name="celular" placeholder="" maxlength="15">
                                              </div>
                                            </div>
                                            <div class="campo_agenda">
                                              <label for="email">Email: </label>
                                              <div>
                                                <i class="fas fa-envelope icon_form"></i>
                                                <input type="text" id="email" name="email" placeholder="" maxlength="40">
                                              </div>
                                            </div>
                                        </div>
                                        <div class="div_agenda">
                                          <div id="agendarCalendar" class="datepicker-here calendarClass" data-timepicker="true" data-language='en' name="Schedule"></div>
                                        </div>
                                        <div class="">
                                          <input type="button" class="button btn_form" id="btn_form_agendar" value="AGENDAR" >
                                      </div>
                                        
                                   </div>
                                </div>
                             </div><!--#talleres-->
                          </div><!--.programa-evento-->
                       </div><!--.contenedor-->
                    </div><!--.contenido-programa-->

                 </section><!--.programa-->
               ';                
              }

            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        ?>


       <section class="ubicacion" id="ubicacion">
          <h2>Ubicación</h2>
          <div class="mapa" id="mapa">
          </div>
       </section>

          <?php
            include('global/footer.php');
          ?>

        <script type="text/javascript" src="js/jquery/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/wpp/floating-wpp.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>        
        <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
        <script src="js/lightbox.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.lettering.js"></script>
        <script src="js/main.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="js/datepicker/datepicker.min.js"></script>
        <script src="js/datepicker/i18n/datepicker.en.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
