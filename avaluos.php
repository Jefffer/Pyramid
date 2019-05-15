<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Avalúos .: Inmobiliaria Pyramid</title>
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

              <section id="avaluos" class="seccion contenedor padding_bot_0 top_-180">
                <div>
                 <h2>Avalúos</h2>
               </div>
               <div>
                 <p>
                   Buscamos ofrecerte el servicio que mejor se ajuste a tus requerimientos, para esto tenemos diferentes tipos de avaluos que se pueden realizar según tus necesidades, tomando en cuenta la finalidad de este servicio. Conoce más acerca de nuestras opciones y elige la que mas se adapte a lo que buscas.
                 </p>
               </div>
             </section><!--.section-->

             <section class="precios seccion contenedor">
              <div id="precios_avaluos" class="contenedor">
               <ul class="lista-precios clearfix">
                <!-- <li>
                   <div class="tabla-precio">
                      <h3>Avalúo no certificado clase 1</h3>
                      <p class="numero">Gratis</p>
                      <ul>
                         <li>Realizado por Profesionales catastrales</li>                        
                         <li>Entrega el mismo día</li>
                         <li></li>
                         <li>Todos los Talleres</li>
                      </ul>
                      <a href="#" class="button hollow">Comprar</a>
                   </div>
                 </li> -->

                 <li>
                   <div class="tabla-precio">
                    <h3>Avalúo no certificado</h3>
                    <p class="numero">$37.900</p>
                    <ul>
                     <li>Precio de venta y arriendo</li>
                     <li>Estudio de Normatividad del inmueble</li>
                     <li>Estudio de mercado del sector</li>
                     <li>Características jurídicas del inmueble</li>
                     <li>Descripción del método valuación</li>
                   </ul>
                   <a id="noCertBtn" class="button">Solicitar</a>
                 </div>
               </li>

               <li>
                 <div class="tabla-precio">
                  <h3>Avalúo certificado</h3>                      
                  <p class="numero">desde $249.000</p>
                  <ul>
                   <li>Visita al inmueble</li>                         
                   <li>Precio de venta y arriendo</li>
                   <li>Estudio de Normatividad del inmueble</li>
                   <li>Estudio de mercado del sector</li>
                   <li>Características jurídicas del inmueble</li>
                   <li>Descripción del método valuación</li>                         
                   <li>Objetivo de la valuación</li>
                   <li>Disposiciones legales</li>
                   <li>Registro fotográfico</li>
                   <li>Firma certificada por Lonja de avaluadores</li>
                 </ul>
                 <a id="certBtn" class="button">Solicitar</a>
               </div>
             </li>
           </ul>

         </div><!--.contenedor-->
         <p>Los items mencionados en cada tipo de avalúo se entregan en un Informe detallado de acuerdo a la valuación del inmueble. Si tienes alguna duda por favor dirígite a las preguntas frecuentes en <a class="estilos_links" href="asesorias.php">Asesorías</a> o directamente <a class="estilos_links" id="contactoLink">Contáctanos</a>.</p>
       </section><!--.precios .seccion-->

       <!-- Modal no certificado -->
       <div id="modalNoCert" class="modal">
        <!-- Modal content -->
        <form class="modal-content" name="noCertForm" method="post" >          
          <div class="modal-header">
            <span class="closeModal">&times;</span>
            <h2>Avalúo No Certificado</h2>
          </div>
          <div class="modal-body">
            <p>A continuación te haremos unas preguntas para que nos brindes mayor informacion sobre tu inmueble</p>
            <p><label><i class="fas fa-user-astronaut"></i> &nbsp;¿Cual es tu nombre completo? </label>
              <input type="text" name="nombre" required>
            </p>
            <p><label><i class="fas fa-phone"></i> &nbsp;¿Cual es tu número telefónico? </label>
              <input type="text" name="tel" required>
            </p>
            <p><label><i class="fas fa-at"></i> &nbsp;¿Cual es tu correo electrónico? </label>
              <input type="email" name="correo" required>
            </p>
            <p><label><i class="fas fa-map-marker-alt"></i> &nbsp;¿Cuál es la direccion del inmueble? </label>
              <input type="text" name="direccion" required>
            </p>
            <p><label><i class="fas fa-hotel"></i> &nbsp;¿Qué tipo de inmueble es? </label>
              <select name="inmueble" id="inmueble" required>
                <option value="">Selecciona un tipo de inmueble</option>
                <option value="1">Apartamento</option>
                <option value="2">Bodega</option>
                <option value="3">Casa</option>
                <option value="4">Finca</option>
                <option value="5">Local Comercial</option>
                <option value="6">Lote</option>
                <option value="7">Oficina</option>
                <option value="8">Otro (escríbelo en Comentarios)</option>
              </select>
            </p>
            <p><label><i class="fas fa-ruler"></i> &nbsp;¿Cuántos metros cuadrados tiene? </label>
              <input type="number" min="1" name="metros" required>
            </p>
            <p><label><i class="fas fa-building"></i> &nbsp;¿Cuántos pisos tiene tu inmueble? </label>
              <input type="text" name="pisos" required>
            </p>
            <p><label><i class="fas fa-level-down-alt"></i> &nbsp;¿Tiene sotanos?¿cuántos?</label>
              <input type="text" name="sotanos" required>
            </p>
            <p><label><i class="fas fa-house-damage"></i> &nbsp;¿Cuál es el estado de la contrucción? </label>
              <select name="estado" id="estado" required>
                <option value="">Selecciona el estado</option>
                <option value="nuevo">Nuevo</option>                
                <option value="excelente">Excelente</option>
                <option value="bueno">Bueno</option>
                <option value="regular">Regular</option>                
              </select>
            </p>
            <p><label><i class="fas fa-calendar-check"></i> &nbsp;¿Cuántos años tiene tu inmueble?</label>
              <input type="number" min="0" name="tiempo" required>
            </p>
            <p><label><i class="fas fa-hammer"></i> &nbsp;¿Tiene remodelaciones?¿Hace cuanto se hicieron?</label>
              <input type="text" name="remodelacion" required>
            </p>
            <p><label><i class="fas fa-bed"></i> &nbsp;¿Cuántas habitaciones tiene? </label>
              <input type="number" min="0" name="habitacion" required>
            </p>
            <p><label><i class="fas fa-bath"></i> &nbsp;¿Cuántos baños tiene?</label>
              <input type="number" min="0" name="banos" required>
            </p>
            <p><label><i class="fas fa-warehouse"></i> &nbsp;¿Tiene parqueadero?¿cuántos? </label>
              <input type="number" min="0" name="parq" required>
            </p>
            <p><label><i class="fas fa-couch"> &nbsp;</i>¿Tiene sala de estar? </label>
               <select name="sala" id="sala" required>
                <option value="">Selecciona una opción</option>
                <option value="si">Sí</option>                
                <option value="no">No</option>                
              </select>
            </p>
            <p><label><i class="fas fa-utensils"></i> &nbsp;¿Tiene cocina integral?</label>
              <select name="cocina" id="cocina" required>
                <option value="">Selecciona una opción</option>
                <option value="si">Sí</option>
                <option value="no">No</option>
              </select>
            </p>
            <p><label><i class="fas fa-leaf"></i> &nbsp;¿Cuenta con Antejardín?</label>
              <select name="jardin" id="jardin" required>
                <option value="">Selecciona una opción</option>
                <option value="si">Sí</option>                
                <option value="no">No</option>                
              </select>
            </p>
            <p><label><i class="fas fa-laptop"></i> &nbsp;¿Tiene cuarto de estudio?</label>
              <select name="estudio" id="estudio" required>
                <option value="">Selecciona una opción</option>
                <option value="si">Sí</option>                
                <option value="no">No</option>                
              </select>
            </p>
            <p><label><i class="fas fa-tshirt"></i> &nbsp;¿Cuenta con cuarto de lavado? </label>
              <select name="lavado" id="lavado" required>
                <option value="">Selecciona una opción</option>
                <option value="si">Sí</option>                
                <option value="no">No</option>                
              </select>
            </p>
            <p class="txt_politicas">Al enviar este formulario estás aceptando nuestras <a class="estilos_links">Políticas de Privacidad</a></p>
          </div>
          <div class="modal-footer">
            <input type="submit" name="subNoCert" value="ENVIAR">
          </div>
        </form>

      </div>

      <!-- Modal Certificado -->
       <div id="modalCert" class="modal">
        <!-- Modal content -->
        <form class="modal-content" name="certForm" method="post">     
          <div class="modal-header">
            <span class="closeModal">&times;</span>
            <h2>Avalúo Certificado</h2>
          </div>
          <div class="modal-body">
            <p>Por favor, brindanos tus datos de contacto para formalizar la visita al inmueble</p>
            <p><label><i class="fas fa-user-astronaut"></i> &nbsp;¿Cual es tu nombre completo? </label>
              <input type="text" name="nombre" required>
            </p>
            <p><label><i class="fas fa-phone"></i> &nbsp;¿Cual es tu número telefónico? </label>
              <input type="text" name="tel" required>
            </p>
            <p><label><i class="fas fa-at"></i> &nbsp;¿Cual es tu correo electrónico? </label>
              <input type="email" name="email" required>
            </p>
            <p><label><i class="fas fa-map-marker-alt"></i> &nbsp;¿Cuál es la direccion del inmueble? </label>
              <input type="text" name="direccion" required>
            </p>
            <p><label><i class="fas fa-hotel"></i> &nbsp;¿Qué tipo de inmueble es? </label>
              <select name="inmueble" id="inmueble" required>
                <option value="">Selecciona un tipo de inmueble</option>
                <option value="1">Apartamento</option>
                <option value="2">Bodega</option>
                <option value="3">Casa</option>
                <option value="4">Finca</option>
                <option value="5">Local Comercial</option>
                <option value="6">Lote</option>
                <option value="7">Oficina</option>
                <option value="8">Otro (escríbelo en Comentarios)</option>
              </select>
            </p>
            <p><label><i class="fas fa-ruler"></i> &nbsp;¿Cuántos metros cuadrados tiene? (opcional) </label>
              <input type="number" min="1" name="metros" required>
            </p>
            <p class="txt_politicas">Al enviar este formulario estás aceptando nuestras <a class="estilos_links">Políticas de Privacidad</a></p>                     
          </div>
          <div class="modal-footer">
            <input type="submit" name="subCert" value="ENVIAR">            
          </div>
        </form>

      </div>
      
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

<?php
if (!empty($_POST['subCert'])){
  $from = 'contacto@inmobiliariapyramid.com';
  $to = $_POST['email'];
  $subject = "Avalúo Certificado .: Inmobiliaria Pyramid";

  $message = "
  <html>
  <head>
  <title>Avalúo Certificado</title>
  </head>
  <body>
  <h2>Nos complace saludarte " . $_POST['nombre'] . ",</h2><br>
  <p>Has solicitado un Avalúo Certificado, relacionando la siguiente información personal:<br><br>
  <b>Nombre completo:</b> " . $_POST['nombre'] . "<br>
  <b>Número telefónico:</b> " . $_POST['tel'] . "<br>
  <b>Correo electrónico:</b> " . $_POST['email'] . "<br><br>
  Además de la siguiente información del inmueble:<br><br>  
  <b>Dirección:</b> " . $_POST['direccion'] . "<br>
  <b>Tipo:</b> " . $_POST['inmueble'] . "<br>
  <b>Metros cuadrados:</b> " . $_POST['metros'] . "<br><br>  
  Nos pondremos en contácto contigo muy pronto. Gracias por escogernos.<br><br>
  <b>Inmobiliaria Pyramid</b><br>
  Juntos podemos hacerlo posible</p>
  </body>
  </html>";

  // Always set content-type when sending HTML email
  $headers='';
  $headers .= 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
  $headers .= 'From: '.$from.' '. "\r\n";
  $headers .= 'BCC:' . 'contacto@inmobiliariapyramid.com' . "\r\n";
  $bool = mail($to,$subject,$message, $headers);

  if($bool){ // Cambiar PRUEBAS!!!!!!
    // conexion Base de Datos
    /*** mysql hostname ***/
    $hostname = '147.135.87.130';
    /*** mysql username ***/
    $username = 'inmobi16_dbuser';
    /*** mysql password ***/
    $password = 'Inmopyd7890';

    try {
        $mbd = new PDO("mysql:host=$hostname;dbname=inmobi16_pyramiddb", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
        
        $sth = $mbd->prepare("INSERT INTO aval_certificado (nombre, telefono, correo, direccion, fk_tipo_inmueble, metros) VALUES (?,?,?,?,?,?)");
        //$sth->execute([$_POST['nombre'], $_POST['tel'], $_POST['email'], $_POST['direccion'], $_POST['inmueble'], $_POST['metros']]);
        $nombre = $_POST['nombre']; $telefono = $_POST['tel']; $correo = $_POST['email']; $dir = $_POST['direccion'];
        $tipoin = $_POST['inmueble']; $metro = $_POST['metros'];
        $sth->execute([$nombre, $telefono, $correo, $dir, $tipoin, $metro]);

        echo "<script>";
        // echo "swal({";
        //   echo "title: "Datos incompletos",";
        //   echo "text: "Por favor ingresa tu número telefónico.",";
        //   echo "icon: "warning",";
        //   echo "dangerMode: true,";
        //   echo "});";
        echo "alert('Mensaje Enviado exitosamente. Nos pondremos en contacto contigo muy pronto');";
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
if (!empty($_POST['subNoCert'])){
  $from = 'contacto@inmobiliariapyramid.com';
  $to = $_POST['correo'];
  $subject = "Avalúo No Certificado .: Inmobiliaria Pyramid";

  $message = "
  <html>
  <head>
  <title>Avalúo No Certificado</title>
  </head>
  <body>
  <h2>Nos complace saludarte " . $_POST['nombre'] . ",</h2><br>
  <p>Has solicitado un Avalúo No Certificado, relacionando la siguiente información personal:<br><br>
  <b>Nombre completo:</b> " . $_POST['nombre'] . "<br>
  <b>Número telefónico:</b> " . $_POST['tel'] . "<br>
  <b>Correo electrónico:</b> " . $_POST['correo'] . "<br><br>
  Además de la siguiente información del inmueble:<br><br>  
  <b>Dirección:</b> " . $_POST['direccion'] . "<br>
  <b>Tipo:</b> " . $_POST['inmueble'] . "<br>
  <b>Metros cuadrados:</b> " . $_POST['metros'] . "<br>
  <b>Pisos:</b> " . $_POST['pisos'] . "<br>
  <b>Sótanos:</b> " . $_POST['sotanos'] . "<br>
  <b>Estado:</b> " . $_POST['estado'] . "<br>
  <b>Antiguedad:</b> " . $_POST['tiempo'] . "<br>
  <b>Remodelaciones:</b> " . $_POST['remodelacion'] . "<br>
  <b>Habitaciones:</b> " . $_POST['habitacion'] . "<br>
  <b>Baños:</b> " . $_POST['banos'] . "<br>
  <b>Parqueadero(s):</b> " . $_POST['parq'] . "<br>
  <b>Sala de estar:</b> " . $_POST['sala'] . "<br>
  <b>Cocina integral:</b> " . $_POST['cocina'] . "<br>
  <b>Antejardín:</b> " . $_POST['jardin'] . "<br>
  <b>Cuarto de estudio:</b> " . $_POST['estudio'] . "<br>
  <b>Cuarto de Lavado:</b> " . $_POST['lavado'] . "<br><br>
  Nos pondremos en contácto contigo muy pronto. Gracias por escogernos.<br><br>
  <b>Inmobiliaria Pyramid</b><br>
  Juntos podemos hacerlo posible</p>
  </body>
  </html>";

  // Always set content-type when sending HTML email
  $headers='';
  $headers .= 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
  $headers .= 'From: '.$from.' '. "\r\n";
  $headers .= 'BCC:' . 'contacto@inmobiliariapyramid.com' . "\r\n";
  $bool = mail($to,$subject,$message, $headers);

  if($bool){
    // conexion Base de Datos
    /*** mysql hostname ***/
    $hostname = '147.135.87.130';
    /*** mysql username ***/
    $username = 'inmobi16_dbuser';
    /*** mysql password ***/
    $password = 'Inmopyd7890';

    try {
        $mbd = new PDO("mysql:host=$hostname;dbname=inmobi16_pyramiddb", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
        
        $sth = $mbd->prepare("INSERT INTO aval_no_certificado (nombre_nocert, telefono_nocert, correo_nocert, direccion_nocert, tipo_nocert, metros_nocert, pisos_nocert, sotano_nocert, estado_nocert, anios_nocert, remodelacion_nocert, habitacion_nocert, banos_nocert, parq_nocert, sala_nocert, cocina_nocert, jardin_nocert, estudio_nocert, lavado_nocert) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        //$sth->execute([$_POST['nombre'], $_POST['tel'], $_POST['email'], $_POST['direccion'], $_POST['inmueble'], $_POST['metros']]);
        $nombre = $_POST['nombre']; $telefono = $_POST['tel']; $correo = $_POST['correo']; $dir = $_POST['direccion'];
        $tipoin = $_POST['inmueble']; $metro = $_POST['metros']; $pisos = $_POST['pisos']; $sotanos = $_POST['sotanos']; 
        $estado = $_POST['estado']; $tiempo = $_POST['tiempo']; $remo = $_POST['remodelacion']; $hab = $_POST['habitacion'];
        $banos = $_POST['banos']; $parq = $_POST['parq']; $sala = $_POST['sala']; $cocina = $_POST['cocina']; 
        $jardin = $_POST['jardin']; $estudio = $_POST['estudio']; $lavado = $_POST['lavado'];
        $sth->execute([$nombre, $telefono, $correo, $dir, $tipoin, $metro, $pisos, $sotanos, $estado, $tiempo, $remo, $hab, $banos, $parq, $sala, $cocina, $jardin, $estudio, $lavado]);

        echo "<script>";
        // echo "swal({";
        //   echo "title: "Datos incompletos",";
        //   echo "text: "Por favor ingresa tu número telefónico.",";
        //   echo "icon: "warning",";
        //   echo "dangerMode: true,";
        //   echo "});";
        echo "alert('Mensaje Enviado exitosamente. Nos pondremos en contacto contigo muy pronto');";
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