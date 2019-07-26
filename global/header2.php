      <div class="hero segunda_vista">

       <div class="barra clearfix fixed">
         <div class="contenedor ">
          <div class="logo">
            <a href="index.php">
              <img src="img/logo/logo_sin_fondo.png" alt="Logo">
            </a>
            <a href="index.php">                    
              <h1 class="nombre-sitio-menu">v<span class="rojito">î</span>ata Inmobiliaria</h1>
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
       <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
       <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
       <a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
       <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
     </nav>
     <div class="informacion-evento">
      <br>

      <h1 class="nombre-sitio">vîata Inmobiliaria</h1>
      <p class="slogan"><span>Obtienes lo que quieres</span></p>
    </div><!--.informacion-evento-->
  </div><!--.contenido-header-->
</div><!--.hero-->

<div class="mockup-content" style="height:0;">
  <div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed" style="height:0;">
    <button id="btnContacto" class="contact_hide" type="button">Contacto</button>
    <div class="morph-content">
      <div>
        <div class="content-style-form content-style-form-1">
          <span class="icon icon-close">Close the dialog</span>
          <h2 class="morph">Contáctanos</h2>
          <form name="form_contact" action="" method="post" id="">
            <p class="morph"><label>Nombre</label><input name="nombre" type="text" required/></p>
            <p class="morph"><label>Email</label><input name="email" type="text" required/></p>
            <p class="morph"><label>Teléfono</label><input name="telefono" type="text" required/></p>
            <p class="morph"><label>Mensaje</label><textarea name="mensaje" placeholder="Dinos lo que necesitas, nos pondremos en contácto muy pronto"></textarea required></p>
            <p class="txt_politicas">Al enviar este formulario estás aceptando nuestras <a class="estilos_links">Políticas de Privacidad</a></p>
            <!-- <p class="morph"><button type="submit" name="submit">ENVIAR<button/></p> -->
            <p class="morph"><input id="sub_contact" type="submit" name="submit" value="ENVIAR" /></p>
          </form>
        </div>
      </div>
    </div>
  </div><!-- morph-button -->                
</div><!-- /form-mockup -->

<script src="js/morph/classie.js"></script>
        <script src="js/morph/uiMorphingButton_fixed.js"></script>
        <script src="js/morph/modernizr.custom.js"></script>

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

<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'PHPMailer-master/src/PHPMailer.php'; // Only file you REALLY need
  require 'PHPMailer-master/src/Exception.php'; // If you want to debug
  if (!empty($_POST['submit'])) {
    $from = 'contacto@viatainmobiliaria.com';
    $to = $_POST['email'];
    //$toMe = 'contacto@viatainmobiliaria.com';
    $subject = "Contacto Viata Inmobiliaria";

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
          <h2>Hola " . $_POST['nombre'] . ",</h2><br>
          <p>Hemos recibido un correo de tu parte con la siguiente información:<br><br>
          <b>Nombre:</b> " . $_POST['nombre'] . "<br>
          <b>Email:</b> " . $_POST['email'] . "<br>
          <b>Teléfono:</b> " . $_POST['telefono'] . "<br><br>
          Y el siguiente mensaje: <i><br><br>" . 
          $_POST['mensaje'] . "</i><br><br>
          Nos pondremos en contácto contigo muy pronto. Gracias por escogernos<br><br>
          <b>Vîata Inmobiliaria</b>
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
          
          $sth = $mbd->prepare("INSERT INTO contacto (nombre, email, telefono, mensaje) VALUES (?,?,?,?)");
          //$sth->execute([$_POST['nombre'], $_POST['tel'], $_POST['email'], $_POST['direccion'], $_POST['inmueble'], $_POST['metros']]);
          $nombre = $_POST['nombre']; $correo = $_POST['email']; $telefono = $_POST['telefono'];  $mensaje = $_POST['mensaje'];
          $sth->execute([$nombre, $correo, $telefono, $mensaje]);

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
    } catch (Exception $e) {
        echo "<script>";
           echo "alert('El mensaje no pudo ser enviado, por favor intentalo de nuevo.');";         
         echo "</script>";
    }
  }
?>