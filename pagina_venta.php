<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Inmueble en venta .: Viata Inmobiliaria</title>
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
          $latitud;
          $longitud;
          $marcador;
          $idInmueble;
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
            $sth = $mbd->prepare("SELECT * FROM inmueble as inm INNER JOIN tipo_inmueble AS tip ON inm.fk_tipo_inmueble = tip.pk_tipo_inmueble INNER JOIN ciudad AS ciu ON inm.fk_ciudad = ciu.pk_ciudad INNER JOIN descr_inmueble AS des ON inm.fk_desc_inmueble = des.pk_desc_inmueble WHERE pk_inmueble = $myId");
            $sth->execute();

            while ($result = $sth->fetch(PDO::FETCH_ASSOC)) {
                $latitud = $result['latitud'];              
                $longitud = $result['longitud'];
                $marcador = $result['nombre_inmueble'];
                $idInmueble = $result['pk_inmueble'];
                echo '
                  <section id="galeria_fotos" class="seccion contenedor top_-180">
                  <h2>'.$result['nombre_inmueble'].' .: en Venta</h2>
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
                                     <p><i class="fas fa-hand-holding-usd" aria-hidden="true"></i> <span class="ttl_info">Valor arriendo:</span> <b> $'.$result['precio_inmueble'].'</b></p>
                                     <p><i class="fas fa-dollar-sign" aria-hidden="true"></i> <span class="ttl_info">Administración:</span> <b> $'.$result['admon_inmueble'].'</b></p>
                                     <p><i class="fas fa-barcode" aria-hidden="true"></i> <span class="ttl_info">Código:</span> '.$result['pk_inmueble'].'-A</p>
                                     <p><i class="fas fa-home" aria-hidden="true"></i> <span class="ttl_info">Tipo Inmueble:</span> '.$result['tipo_inmueble'].'</p>
                                     <p><i class="fas fa-city" aria-hidden="true"></i> <span class="ttl_info">Ciudad:</span> '.$result['nombre_ciudad'].'</p>
                                     <p><i class="fas fa-map-marked-alt" aria-hidden="true"></i> <span class="ttl_info">Zona (Localidad):</span> '.$result['zona_inmueble'].'</p>
                                     <p><i class="fas fa-map-marker-alt" aria-hidden="true"></i> <span class="ttl_info">Barrio:</span> '.$result['barrio_inmueble'].'</p>
                                     <p><i class="fa fa-user" aria-hidden="true"></i> <span class="ttl_info">Estrato:</span> '.$result['estrato_inmueble'].'</p>
                                     <p><i class="fas fa-ruler" aria-hidden="true"></i> <span class="ttl_info">Área total:</span> '.$result['area_inmueble'].' m<sup>2</sup></p>
                                     <p><i class="fas fa-align-justify" aria-hidden="true"></i> <span class="ttl_info">Nro. pisos:</span> '.$result['nro_pisos_inmueble'].'</p>
                                     <p><i class="fas fa-bed" aria-hidden="true"></i> <span class="ttl_info">Habitaciones:</span> '.$result['habit_inmueble'].'</p>
                                     <p><i class="fas fa-pen-alt" aria-hidden="true"></i> <span class="ttl_info">Estudio:</span> '.$result['estudio_inmueble'].'</p>
                                     <p><i class="fas fa-bath" aria-hidden="true"></i> <span class="ttl_info">Baños:</span> '.$result['banos_inmueble'].'</p>
                                     <p><i class="fas fa-door-open" aria-hidden="true"></i> <span class="ttl_info">Closet:</span> '.$result['closet_inmueble'].'</p>
                                     <p><i class="fas fa-car" aria-hidden="true"></i> <span class="ttl_info">Parqueaderos:</span> '.$result['parq_inmueble'].'</p>
                                     <p><i class="fas fa-house-damage" aria-hidden="true"></i> <span class="ttl_info">Antigüedad:</span> '.$result['antiguedad_inmueble'].' años</p>
                                     <p><i class="fas fa-broom" aria-hidden="true"></i> <span class="ttl_info">Cuarto aseo:</span> '.$result['aseo_inmueble'].'</p>
                                     <p><i class="fas fa-wind" aria-hidden="true"></i> <span class="ttl_info">Aire acondicionado:</span> '.$result['air_acon_inmueble'].'</p>
                                     <p><i class="fas fa-dungeon" aria-hidden="true"></i> <span class="ttl_info">Balcón:</span> '.$result['balcon_inmueble'].'</p>
                                     <p><i class="fas fa-sort-amount-up" aria-hidden="true"></i> <span class="ttl_info">Ascensor:</span> '.$result['ascen_inmueble'].'</p>
                                     <p><i class="fas fa-archive" aria-hidden="true"></i> <span class="ttl_info">Deposito:</span> '.$result['deposito_inmueble'].'</p>
                                     <p><i class="fab fa-gripfire" aria-hidden="true"></i> <span class="ttl_info">Chimenea:</span> '.$result['chimenea_inmueble'].'</p>
                                     <p><i class="fas fa-umbrella-beach" aria-hidden="true"></i> <span class="ttl_info">Terraza:</span> '.$result['terraza_inmueble'].'</p>
                                </div>
                                
                                <!-- <a href="#" class="button float-right">Ver Todos</a> -->
                             </div><!--#talleres-->

                             <div id="conferencias" class="info-curso ocultar clearfix">
                                <div class="detalle-evento">
                                  <h3>General</h3>
                                  <p>'.$result['general_desc'].'</p>
                                </div>
                                <div class="detalle-evento">
                                  <h3>Sector</h3>
                                  <p>'.$result['general_desc'].'</p>
                                </div>
                                <div class="detalle-evento">
                                  <h3>Vías de acceso</h3>
                                  <p>'.$result['vias_desc'].'</p>
                                </div>
                             </div><!--#talleres-->

                            ';
                            }

                          }
                          catch(PDOException $e)
                          {
                              echo $e->getMessage();
                          }
                      ?>

                         <div id="seminarios" class="info-curso ocultar clearfix">
                            <div class="detalle-evento">                         
                               <!-- <p><i class="fa fa-calendar" aria-hidden="true"></i> <input type="text" class="datepicker-here" data-timepicker="true" data-time-format="hh:ii aa" data-language="en" /></p> -->
                               <p>Para agendar una visita a este inmueble, solo debes diligenciar estos datos y nos pondremos en contacto contigo lo antes posible.</p>
                               <div id="agenda_cita" class="registro">
                                <form name="cita" method="post">

                                  <div class="div_agenda">
                                      <div class="campo_agenda">
                                        <label for="nombre">Nombre completo: </label>
                                        <div>
                                          <i class="fas fa-user icon_form"></i>
                                          <input type="text" id="nombre" name="nombre" placeholder="" maxlength="50" required>
                                        </div>
                                      </div>
                                      <div class="campo_agenda">
                                        <label for="celular">Teléfono o Celular: </label>
                                        <div>
                                          <i class="fas fa-phone icon_form"></i>
                                          <input type="text" id="celular" name="celular" placeholder="" maxlength="15" required>
                                        </div>
                                      </div>
                                      <div class="campo_agenda">
                                        <label for="email">Email: </label>
                                        <div>
                                          <i class="fas fa-envelope icon_form"></i>
                                          <input type="text" id="email" name="email" placeholder="" maxlength="40" required>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="div_agenda">
                                    <!-- <div id="agendarCalendar" class="datepicker-here calendarClass" data-timepicker="true" data-language="en" name="schedule"></div> -->
                                    <div class="campo_agenda">
                                      <label for="email">Fecha y hora: </label>
                                      <div>
                                        <i class="fas fa-calendar-check icon_form"></i>
                                        <input id="agendarCalendar" class="datepicker-here calendarClass" data-timepicker="true" data-language="en" name="schedule" required>
                                      </div>
                                    </div>
                                    
                                  </div>
                                  <div class="">
                                    <input class="button btn_form" id="btn_form_agendar" value="AGENDAR" type="submit" name="submitDate">
                                  </div>

                                </form>                            
                               </div>
                              </div>
                           </div><!--#talleres-->
                        </div><!--.programa-evento-->
                     </div><!--.contenedor-->
                  </div><!--.contenido-programa-->

                 </section><!--.programa-->               

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

        <script>
          var longitud = '<?php echo $longitud;?>';
          var latitud = '<?php echo $latitud;?>';
          var marcador = '<?php echo $marcador;?>';
          //alert(longitud);
          // Mapa
          if (document.getElementById('mapa')){
            var map = L.map('mapa').setView([latitud, longitud], 16);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            //L.marker([4.728828, -74.053656]).addTo(map)
            //L.marker([latitud, longitud]).addTo(map)
            var circle = L.circle([latitud, longitud], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.4,
                radius: 200
            }).addTo(map)
            .bindPopup(marcador)
            .openPopup();
            //.bindTooltip('Ubicación aproximada')
            //.openTooltip();

            map.scrollWheelZoom.disable();
            map.on('click', function() {
              if (map.scrollWheelZoom.enabled()) {
                map.scrollWheelZoom.disable();
              }
              else {
                map.scrollWheelZoom.enable();
              }
            });
          }
        </script>
    </body>
</html>

<?php
  if (!empty($_POST['submitDate'])) {
    $from = 'contacto@inmobiliariapyramid.com';
    $to = $_POST['email'];
    $toMe = 'contacto@inmobiliariapyramid.com';
    $subject = "Agenda de visita .: Inmobiliaria Pyramid";

    $message = "
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <h2>Hola " . $_POST['nombre'] . ",</h2><br>
    <p>Sabemos que estás interesado en comprar uno de nuestros inmuebles, es por esto que muy pronto nos pondremos en contácto para formalizar la visita.<br><br>    
    <b>Inmueble:</b> " . $marcador . "<br><br>
    <b>Fecha:</b> " . $_POST['schedule'] . "<br><br>
    
    Gracias por escogernos<br><br>
    <b>Inmobiliaria Pyramid</b>
    </body>
    </html>";

    // Always set content-type when sending HTML email
    $headers='';
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $headers .= 'From: '.$from.' '. "\r\n";
    //$headers .= 'BCC:' . 'contacto@inmobiliariapyramid.com' . "\r\n";
    $bool = mail($to,$subject,$message, $headers);
    //mail($toMe,$subject,$message, $headers);

    if($bool){ // PRUEBAAAAAAAAAAS
      // conexion Base de Datos
      /*** mysql hostname ***/
      $hostname = '147.135.87.130';
      /*** mysql username ***/
      $username = 'inmobi16_dbuser';
      /*** mysql password ***/
      $password = 'Inmopyd7890';

      try {
          $mbd = new PDO("mysql:host=$hostname;dbname=inmobi16_pyramiddb", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
          
          $sth = $mbd->prepare("INSERT INTO form_agenda_cita (nombre_form_ac, telefono_form_ac, email_form_ac, fecha_form_ac, interes, fk_inmueble) VALUES (?,?,?,?,?,?)");
          //$sth->execute([$_POST['nombre'], $_POST['tel'], $_POST['email'], $_POST['direccion'], $_POST['inmueble'], $_POST['metros']]);
          $nombre = $_POST['nombre']; $correo = $_POST['email']; $telefono = $_POST['celular'];  $fecha = $_POST['schedule'];

          //$sth->execute([$nombre, $telefono, $correo, $fecha, $idInmueble]);
          $sth->execute([$nombre, $telefono, $correo, $fecha, "Compra", $idInmueble]);

          echo "<script>";

          // echo "swal({";
          //   echo "title: "Datos incompletos",";
          //   echo "text: "Por favor ingresa tu número telefónico.",";
          //   echo "icon: "warning",";
          //   echo "dangerMode: true,";
          //   echo "});";

          echo "alert('Mensaje Enviado exitosamente. Nos pondremos en contacto contigo muy pronto ". $_POST['schedule'] ."');";
          echo "</script>";
      }
      catch(PDOException $e)
      {
          echo $e->getMessage();
      }    
    }else{
       echo "<script>";
         echo "alert('El mensaje no pudo ser enviado, por favor intentalo de nuevo');";
       echo "</script>";
    }
  }
?>