<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Inmueble en Arriendo .: Viata Inmobiliaria</title>
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

        <section id="arriendo_div" class="seccion contenedor padding_bot_0 top_-180">
           <h2>Arriendo</h2>
           <p>
             En <b>V<span class="rojito">î</span>ata Inmobiliaria</b> , nuestro interés es darte a conocer la gran variedad de ofertas inmobiliarias disponibles para ti que buscas cambiar tu estilo de vida empezando por una casa o apartamento con todo lo que quieres y necesitas. En cada inmueble encontraras una galería fotográfica mostrando todos sus espacios y un video con el recorrido completo por la vivienda.  Si deseas conocer alguno de nuestros inmuebles puedes agendar una cita con nosotros en el horario que más te convenga y continúa el proceso de arriendo.
            </p>            
       </section><!--.section-->

       <section id="publicaciones_venta" class="invitados contenedor seccion">
         <h2>Inmuebles en Arriendo</h2>

         <div class="caja_filtro clearfix" id="datos_filtro">
           <form id="form_filtro" action="" method="GET">
              <div class="campo">
                <label for="filtro_tipo">Tipo inmueble: </label>
                <div>
                  <i class="fas fa-home icon_form"></i>
                    <select name="filtro_tipo" id="filtro_tipo" value="">
                      <option value="NULL">Todos</option>
                      <option value="1">Apartamento</option>
                      <option value="2">Bodega</option>
                      <option value="3">Casa</option>
                      <option value="4">Finca</option>
                      <option value="5">Local Comercial</option>
                      <option value="6">Lote</option>
                      <option value="7">Oficina</option>
                    </select>
                </div>
              </div>              
              <div class="campo">
                <label for="filtro_zona">Zona: </label>
                <div>
                  <i class="fas fa-street-view icon_form"></i>
                  <select name="filtro_zona" id="filtro_zona">
                      <option value="NULL">Todas</option>
                      <option value="1">Norte</option>
                      <option value="2">Noroccidente</option>
                      <option value="3">Occidente</option>
                      <option value="4">Sur</option>
                      <option value="5">Centro</option>
                      <option value="6">Oriente</option>
                    </select>
                </div>
              </div>
              <div class="campo">
                <label for="filtro_precio">Precio: </label>
                <div>                  
                  <div>
                    <i class="fas fa-search-dollar icon_form"></i>
                    <select name="filtro_precio" id="filtro_precio">
                        <option value="NULL">Cualquier precio</option>
                        <option value="1">< $100.000.000</option>
                        <option value="2">$100.000.000 - $200.000.000</option>
                        <option value="3">$200.000.000 - $400.000.000</option>
                        <option value="4">$400.000.000 - $600.000.000</option>
                        <option value="5">> $600.000.000</option>
                      </select>
                    </div>
                </div>
              </div>
            </form>
            <button class="button" id="btn_fltr" type="submit" form="form_filtro" name="submit_filtro">Filtrar</button>
          </div>
         <ul class="lista-invitados publication clearfix">

       <?php
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
          //$sth = $mbd->prepare("SELECT * FROM inmueble where isVenta = 1");
          if(isset($_GET['submit_filtro'])){
            $filtro_tipo = $_GET['filtro_tipo'];
            //$filtro_tipo = 1;
            $filtro_precio = $_GET['filtro_precio'];
            $filtro_zona = $_GET['filtro_zona'];
            if ($filtro_tipo != 'NULL' && $filtro_zona == 'NULL' && $filtro_precio == 'NULL') {
              $sth = $mbd->prepare("SELECT * FROM inmueble where fk_tipo_inmueble = ? AND isArriendo = 1");
              $sth->execute([$filtro_tipo]);
              //echo $filtro_tipo;
            }
            else if ($filtro_tipo == 'NULL' && $filtro_zona != 'NULL' && $filtro_precio == 'NULL') {
              $sth = $mbd->prepare("SELECT * FROM inmueble where fk_zona = ? AND isArriendo = 1");
              $sth->execute([$filtro_zona]);
            }
            else if ($filtro_tipo != 'NULL' && $filtro_zona != 'NULL' && $filtro_precio == 'NULL') {
              $sth = $mbd->prepare("SELECT * FROM inmueble where fk_tipo_inmueble = ? AND fk_zona = ? AND isArriendo = 1");
              $sth->execute([$filtro_tipo, $filtro_zona]);
            }
            else {
              $sth = $mbd->prepare("SELECT * FROM inmueble where isArriendo = 1");
              $sth->execute();
            }
          } 
          else {
            $sth = $mbd->prepare("SELECT * FROM inmueble where isArriendo = 1");
            $sth->execute();
          }

          while ($result = $sth->fetch(PDO::FETCH_ASSOC)) {
            if (!$result) {
              echo 'asdfasdf';
            }
            echo '
               <li>
                  <div class="invitado">
                    <a href="pagina_arriendo.php?id='.$result['pk_inmueble'].'">
                       <img src="img/Publicaciones_venta/house_1.jpg" alt="Imagen invitado">
                       <!-- <p class="bandera_venta">asdfasdfasdg</p> -->
                       <p class="item_venta">'.$result['nombre_inmueble'].'
                          <br>
                          <!-- <span class="width_25">En <B>Pyramid</B> la </span> -->
                          <i class="fas fa-bed"></i> <span>'.$result['habit_inmueble'] .' Hab</span>&nbsp;&nbsp;
                          <!-- <i class="fas fa-car"></i> <span>'. $result['parq_inmueble'] .' Parq</span>&nbsp;&nbsp; -->
                          <i class="fas fa-ruler"></i> <span>'. $result['area_inmueble'] .' m<sup>2</sup></span>&nbsp;&nbsp;
                          <i class="fas fa-dollar-sign azulito"></i> <span class="item_precio">'.$result['arriendo_inmueble'].'</span>
                       </p>
                     </a>
                  </div>
               </li>';
            }

            echo '</ul>
              </section><!--.invitados-->';
          }
          catch(PDOException $e)
          {
              echo $e->getMessage();
          }
        ?>
       <!--
       <section id="publicaciones_venta" class="invitados contenedor seccion">
          <h2>Inmuebles en Arriendo</h2>
          <ul class="lista-invitados publication clearfix">
             <li>
                <div class="invitado">
                  <a href="pagina_venta.php">
                     <img src="img/Publicaciones_venta/house_1.jpg" alt="Imagen invitado">
                     <!-- <p class="bandera_venta">asdfasdfasdg</p> -->
                     <!--<p class="item_venta">Casa en Cedritos
                        <br>
                        <!-- <span class="width_25">En <B>Pyramid</B> la </span> -->
                        <!--<i class="fas fa-bed"></i> <span>4 Hab</span>&nbsp;&nbsp;
                        <!-- <i class="fas fa-car"></i> <span>1 Parq</span>&nbsp;&nbsp; -->
                        <!--<i class="fas fa-ruler"></i> <span>200 m<sup>2</sup></span>&nbsp;&nbsp;
                        <i class="fas fa-dollar-sign azulito"></i> <span class="item_precio">300 Mill</span>
                     </p>
                   </a>
                </div>
             </li>
             <li>
                <div class="invitado">
                  <a href="pagina_venta.php">
                     <img src="img/arriendo_1.jpg" alt="Imagen invitado">
                     <p class="item_venta">Casa en Prado
                        <br>
                        <i class="fas fa-bed"></i> <span>4 Hab</span>&nbsp;&nbsp;
                        <i class="fas fa-ruler"></i> <span>200 m<sup>2</sup></span>&nbsp;&nbsp;
                        <i class="fas fa-dollar-sign azulito"></i> <span class="item_precio">300 Mill</span>                        
                     </p>
                   </a>
                </div>
             </li>
             <li>
                <div class="invitado">
                  <a href="pagina_venta.php">
                     <img src="img/Publicaciones_venta/house_2.jpg" alt="Imagen invitado">
                     <p class="item_venta">Apartamento en Chia
                        <br>
                        <i class="fas fa-bed"></i> <span>4 Hab</span>&nbsp;&nbsp;
                        <i class="fas fa-ruler"></i> <span>200 m<sup>2</sup></span>&nbsp;&nbsp;
                        <i class="fas fa-dollar-sign azulito"></i> <span class="item_precio">300 Mill</span>                        
                     </p>
                   </a>
                </div>
             </li>
             <li>
                <div class="invitado">
                  <a href="pagina_venta.php">
                     <img src="img/Publicaciones_venta/house_3.jpg" alt="Imagen invitado">
                     <p class="item_venta">Apartamento en Colina
                        <br>
                        <i class="fas fa-bed"></i> <span>4 Hab</span>&nbsp;&nbsp;
                        <i class="fas fa-ruler"></i> <span>200 m<sup>2</sup></span>&nbsp;&nbsp;
                        <i class="fas fa-dollar-sign azulito"></i> <span class="item_precio">300 Mill</span>                        
                     </p>
                   </a>
                </div>
             </li>
             <li>
                <div class="invitado">
                  <a href="pagina_venta.php">
                     <img src="img/Publicaciones_venta/house_4.jpg" alt="Imagen invitado">
                     <p class="item_venta">Apartamento en Cajicá
                        <br>
                        <i class="fas fa-bed"></i> <span>4 Hab</span>&nbsp;&nbsp;
                        <i class="fas fa-ruler"></i> <span>200 m<sup>2</sup></span>&nbsp;&nbsp;
                        <i class="fas fa-dollar-sign azulito"></i> <span class="item_precio">300 Mill</span>                        
                     </p>
                   </a>
                </div>
             </li>
             <li>
                <div class="invitado">
                  <a href="pagina_venta.php">
                     <img src="img/Publicaciones_venta/house_5.jpg" alt="Imagen invitado">
                     <p class="item_venta">Casa en El Refugio
                        <br>
                        <i class="fas fa-bed"></i> <span>4 Hab</span>&nbsp;&nbsp;
                        <i class="fas fa-ruler"></i> <span>200 m<sup>2</sup></span>&nbsp;&nbsp;
                        <i class="fas fa-dollar-sign azulito"></i> <span class="item_precio">300 Mill</span>                        
                     </p>
                   </a>
                </div>
             </li>
          </ul>
       </section><!--.invitados-->

       <section id="arrienda-nosotros" class="seccion contenedor padding_bot_0">
         <h2>Arrienda con Nosotros</h2>
         <p>
           Nos enfocamos en prestar un servicio adecuado y seguro al momento de buscar el arrendatario que se ajuste a tus necesidades, evitando contratiempos y realizando el proceso de arriendo fácil y rápido para ti. 
          </p>

          <form id="registro_arriendo" class="registro clearfix" method="post">            
            <div id="datos_usuario" class="registro caja clearfix">
                <h4>Información básica del propietario</h4>
                <div class="campo">
                  <label for="nombreForm">Nombre completo: </label>
                  <div>
                    <i class="fas fa-user icon_form"></i>
                    <input type="text" id="nombreForm" name="nombre" placeholder="" maxlength="40" required>
                  </div>
                </div>
                <div class="campo">
                  <label for="celularForm">Teléfono o Celular: </label>
                  <div>
                    <i class="fas fa-phone icon_form"></i>
                    <input type="text" id="celular" name="celularForm" placeholder="" maxlength="15" required>
                  </div>
                </div>
                <div class="campo">
                  <label for="emailForm">Email: </label>
                   <div>
                    <i class="fas fa-envelope icon_form"></i>
                    <input type="text" id="email" name="emailForm" placeholder="" maxlength="40" required>
                  </div>
                </div>

                <h4 style="margin-top:13%;">Información básica del inmueble</h4>
                <div class="campo">
                  <label for="inmuebleForm">Tipo de Inmueble: </label>
                  <!-- <input type="text" id="nombre" name="nombre" placeholder=""> -->
                  <div>
                    <i class="fas fa-home icon_form"></i>
                    <select name="inmuebleForm" id="inmueble" required>
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

                  </div>
                </div>
                <div class="campo">
                  <label for="cuidadForm">Ciudad: </label>
                  <div>
                    <i class="fas fa-globe-americas  icon_form"></i>
                    <select name="cuidadForm" id="cuidad" required>
                      <option value="">Selecciona la ciudad</option>
                      <option value="1">Bogotá</option>
                    </select>
                  </div>
                </div>
                <div class="campo">
                  <label for="barrioForm">Barrio: </label>
                  <div>
                    <i class="fas fa-street-view  icon_form"></i>
                    <input type="text" id="barrio" name="barrioForm" placeholder="" maxlength="40" required>
                  </div>
                </div>
                <div class="campo">
                  <label for="antiguedadForm">Antiguedad: </label>
                  <!-- <input type="text¿¿" id="email" name="email" placeholder=""> -->
                  <div>
                    <i class="fas fa-house-damage  icon_form"></i>
                    <select name="antiguedadForm" id="antiguedad" required>
                      <option value="">Selecciona la Antiguedad del Inmueble</option>
                      <option value="Nuevo">Nuevo</option>
                      <option value="1 a 3 años">1 - 3 años</option>
                      <option value="4 a 6 años">4 - 6 años</option>
                      <option value="7 a 10 años">7 - 10 años</option>
                      <option value="11 a 15 años">11 - 15 años</option>
                      <option value="Mas de 15 años">Más de 15 años</option>
                    </select>
                  </div>
                </div>
                <div class="campo coment">
                  <label for="coment_arriendo">Comentarios (opcional):</label>
                  <textarea maxlength="500" type="text" id="coment_arriendo" name="coment_arriendo" placeholder="Si tienes alguna duda o sugerencia para tu proceso de venta, cuéntanos..."></textarea>
                  <p class="txt_politicas">Al enviar este formulario estás aceptando nuestras <a class="estilos_links">Políticas de Privacidad</a></p>
                </div>
                <div class="full_width">
                  <input type="submit" name="submitArriendo" class="button btn_form" id="btn_form_arriendo" value="INGRESA TU INMUEBLE" >
                </div>
            </div><!--#datos_usuario-->
          </form>
       </section><!--.section-->

       

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
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'PHPMailer-master/src/PHPMailer.php'; // Only file you REALLY need
  require 'PHPMailer-master/src/Exception.php'; // If you want to debug
  if (isset($_POST['submitArriendo'])) {
    $from = 'contacto@viatainmobiliaria.com';
    $to = $_POST['email'];
    $subject = "Arrienda con Nosotros .: Viata Inmobiliaria";

    $mail = new PHPMailer(true); // Passing `true` enables exceptions
    $mail->CharSet = 'UTF-8';
    //$mail->Encoding = "base64";

    try {
      //$mail->IsSMTP(); // enable SMTP
      //Recipients
      $mail->setFrom($from);
      //$mail->addAddress('jefsrodriguezr@correo.udistrital.edu.co', 'Joe User'); // Add a recipient
      $mail->addAddress($to); // Name is optional
      //$mail->addReplyTo('info@example.com', 'Information');
      //$mail->addCC('cc@example.com');
      $mail->addBCC($from);

      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name

      $message = "
        <html>
        <head>
        <title>HTML email</title>
        </head>
        <body>
        <h2>Nos complace saludarte " . $_POST['nombreForm'] . ",</h2><br>
        <p>Has ingresado la siguiente información, relacionada al inmueble en arriendo que deseas publicar en nuestra plataforma:<br><br>
        <b>Tipo de Inmueble:</b> " . $_POST['inmuebleForm'] . "<br>
        <b>Ciudad:</b> " . $_POST['cuidadForm'] . "<br>
        <b>Barrio:</b> " . $_POST['barrioForm'] . "<br>
        <b>Antiguedad:</b> " . $_POST['antiguedadForm'] . "<br>
        <b>Comentarios:</b> " . $_POST['coment_arriendo'] . "<br><br>
        Además de la siguiente información personal:<br><br>
        <b>Nombre:</b> " . $_POST['nombreForm'] . "<br>
        <b>Teléfono:</b> " . $_POST['celularForm'] . "<br>
        <b>Email:</b> " . $_POST['emailForm'] . "<br><br>
        Nos pondremos en contácto contigo muy pronto. Gracias por escogernos.<br><br>
        <b>Vîata Inmobiliaria</b><br>
        Juntos podemos hacerlo posible</p>
        </body>
        </html>";

      //Content
      $mail->isHTML(true); // Set email format to HTML
      $mail->Subject = utf8_decode($subject);
      $mail->Body = $message;
      $mail->AltBody = 'Error al mostrar el mensaje. Posibles causas: version muy antigua del explorador.';

      $mail->send();

      // conexion Base de Datos
      /*** mysql hostname ***/
      $hostname = '147.135.87.130';
      /*** mysql username ***/
      $username = 'inmobi16_dbuser';
      /*** mysql password ***/
      $password = 'Inmopyd7890';

      try {
        $mbd = new PDO("mysql:host=$hostname;dbname=inmobi16_pyramiddb", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
        
        $sth = $mbd->prepare("INSERT INTO form_arrienda (nombre_form_arr, telefono_form_arr, email_form_arr, fk_tipo_inmueble_arr, fk_ciudad_arr, barrio_form_arr, antiguedad_form_arr, coment_form_arr) VALUES (?,?,?,?,?,?,?,?)");
        //$sth->execute([$_POST['nombre'], $_POST['tel'], $_POST['email'], $_POST['direccion'], $_POST['inmueble'], $_POST['metros']]);
        $nombre = $_POST['nombre']; $correo = $_POST['emailForm']; $telefono = $_POST['celularForm'];  $tipo = $_POST['inmuebleForm'];
        $ciudad = $_POST['cuidadForm']; $barrio = $_POST['barrioForm']; $antiguedad = $_POST['antiguedadForm']; $coment = $_POST['coment_arriendo'];

        //$sth->execute([$nombre, $telefono, $correo, $fecha, $idInmueble]);
        $sth->execute([$nombre, $telefono, $correo, $tipo, $ciudad, $barrio, $antiguedad, $coment]);

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
    } catch (Exception $e) {
      echo "<script>";
        echo "alert('El mensaje no pudo ser enviado, por favor intentalo de nuevo.');";         
      echo "</script>";
    }
  }
?>