	(function() {
		'use strict'

		var regalo = document.getElementById('regalo');

		document.addEventListener('DOMContentLoaded', function() {

			// Mapa
			if (document.getElementById('mapa')){
				var map = L.map('mapa').setView([4.728828, -74.053656], 16);

				L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
					attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
				}).addTo(map);

				L.marker([4.728828, -74.053656]).addTo(map)
				.bindPopup('Exsis SAS.<br> Prueba popup.')
				.openPopup()
				.bindTooltip('Tooltip de prueba')
				.openTooltip();

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
			
			// Campos datos usuario
			var nombre = document.getElementById('nombre');
			var apellido = document.getElementById('apellido');
			var email = document.getElementById('email');

			//Campos pases 
			var pase_dia = document.getElementById('pase_dia');
			var pase_dos_dias = document.getElementById('pase_dos_dias');
			var pase_completo = document.getElementById('pase_completo');

			// Botones y divs
			var calcular = document.getElementById('calcular');
			var errorDiv = document.getElementById('error');
			var btnRegistro = document.getElementById('btnRegistro');
			var list_productos = document.getElementById('lista-productos');
			var sumaT = document.getElementById('suma-total');

			// Extras
			// onClick Boton Calcular
			var etiquetas = document.getElementById('etiquetas');
			var camisas = document.getElementById('camisa_evento');

			// Event Listeners
			if (calcular) {
				calcular.addEventListener('click', calcularMontos);
				pase_dia.addEventListener('change', mostrarDias);
				pase_dos_dias.addEventListener('change', mostrarDias);
				pase_completo.addEventListener('change', mostrarDias);
				nombre.addEventListener('blur', validarCampos);
				apellido.addEventListener('blur', validarCampos);
				//email.addEventListener('blur', validarCampos);
				email.addEventListener('blur', validarMail);

				// Funcion que valida el nombre
				function validarCampos() {
					if (this.value == '') {
						errorDiv.style.display = 'block';
						errorDiv.innerHTML = "Este campo es obligatorio";
						this.style.border = '1px solid red';
						errorDiv.style.border = '1px solid red';
					} else {
						errorDiv.style.display = 'none';
						this.style.border = '1px solid #cccccc';
					}
				}

				// Funcion que valida el email
				function validarMail() {
					if (this.value.indexOf("@") > -1) {
						errorDiv.style.display = 'none';
						this.style.border = '1px solid #cccccc';
					} else {
						errorDiv.style.display = 'block';
						errorDiv.innerHTML = "La dirección email no es válida";
						this.style.border = '1px solid red';
						errorDiv.style.border = '1px solid red';
					}
				}

				// Funcion que calcula el valor a pagar y muestra el resumen de la compra
				function calcularMontos(event) {
					event.preventDefault();
					var regalo_val = regalo.value;
					if (regalo_val == ''){
						alert("Debes elegir un regalo");
						regalo.focus();
					} else {
						var boletosDia = parseInt(pase_dia.value, 10) || 0,
							boletos2Dias = parseInt(pase_dos_dias.value, 10) || 0,
							boletosTodos = parseInt(pase_completo.value, 10) || 0,
							cantCamisas = parseInt(camisas.value, 10) || 0,
							cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

						// Calcula el valor que se debe pagar despues de seleccionar todo
						var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletosTodos * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

						var listadoProductos = [];

						if (boletosDia > 0) {
							listadoProductos.push(boletosDia + ' Pase(s) por día');
						}
						if (boletos2Dias > 0) {
							listadoProductos.push(boletos2Dias + ' Pase(s) por dos días');
						}
						if (boletosTodos > 0) {
							listadoProductos.push(boletosTodos + ' Pase(s) todos los días');
						}
						if (cantCamisas > 0) {
							listadoProductos.push(cantCamisas + ' Camiseta(s)');
						}
						if (cantEtiquetas > 0) {
							listadoProductos.push(cantEtiquetas + ' Etiqueta(s)');
						}

						list_productos.style.display = "block";
						list_productos.innerHTML = '';
						for (var i = 0; i < listadoProductos.length; i++) {
							// Imprime los productos en la vista HTML
							list_productos.innerHTML += listadoProductos[i] + '<br/>';
						}

						sumaT.innerHTML = "$ " + totalPagar.toFixed(2);

						console.log(listadoProductos);
					}
				}

				function mostrarDias() {
					var boletosDia = parseInt(pase_dia.value, 10) || 0,
						boletos2Dias = parseInt(pase_dos_dias.value, 10) || 0,
						boletosTodos = parseInt(pase_completo.value, 10) || 0;
						
					var diasElegidos = [];

					if (boletosDia > 0) {
						diasElegidos.push('viernes');
					}
					else {
						document.getElementById('viernes').style.display = 'none';
					}
					if (boletos2Dias > 0) {
						diasElegidos.push('viernes', 'sabado');
					}
					else {
						document.getElementById('viernes').style.display = 'none';
						document.getElementById('sabado').style.display = 'none';
					}
					if (boletosTodos > 0) {
						diasElegidos.push('viernes', 'sabado', 'domingo');
					}
					else {
						document.getElementById('viernes').style.display = 'none';
						document.getElementById('sabado').style.display = 'none';
						document.getElementById('domingo').style.display = 'none';				
					}

					console.log(diasElegidos);

					for (var i = 0; i < diasElegidos.length; i++) {
						document.getElementById(diasElegidos[i]).style.display = 'block';
					}
				}
			}
		}); // DOM Content Loader

	})();


	$(function() {

		// Lettering
		$('.nombre-sitio').lettering();
		$('.slogan').lettering();
		$('.newsletter h3').lettering();
		$('.newsletter p').lettering();

		// Animar numeros
		animarNumeros();

		// Menú fijo
		// var windowHeight = $(window).height();
		// var barraAltura = $('.barra').innerHeight();
		// $(window).scroll(function() {
		// 	var scroll = $(window).scrollTop();
		// 	if (scroll > windowHeight) {
		// 		$('.barra').addClass('fixed');
		// 		$('body').css({'margin-top': barraAltura+'px'});
		// 	} else {
		// 		$('.barra').removeClass('fixed');
		// 		$('body').css({'margin-top':0});
		// 	}
		// })

		// llamado a Validaciones y Alert formulario desde vista Venta
		$('#btn_form_vender').on('click', alertFormValidation);

		// llamado a Validaciones y Alert formulario desde vista Arriendos
		$('#btn_form_arriendo').on('click', alertFormValidation);

		// Validaciones y Alert formulario	
		function alertFormValidation() {
			var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;		
			if ($('#nombre').val() == "") {
				swal({
					title: "Datos incompletos",
					text: "Por favor ingresa tu Nombre.",
					icon: "warning",
					dangerMode: true,
					// button: {
					// 	text: "OK",
					// 	value: true,
				 //  	},			
				});
				$('#nombre').focus();
			}
			else if ($('#celular').val() == "") {
				swal({
					title: "Datos incompletos",
					text: "Por favor ingresa tu número telefónico.",
					icon: "warning",
					dangerMode: true,	
				});
				$('#celular').focus();
			}
			else if ($('#email').val() == "") {
				swal({
					title: "Datos incompletos",
					text: "Por favor ingresa tu correo electrónico.",
					icon: "warning",
					dangerMode: true,	
				});
				$('#email').focus();
			}
			else if (!regex.test($('#email').val())) {
	  			swal({
					title: "Datos incorrectos",
					text: "Por favor ingresa un correo electrónico válido.",
					icon: "error",
					dangerMode: true,
				});
				$('#email').focus();
			}
			else if ($('#inmueble').val() == "") {
				swal({
					title: "Datos incompletos",
					text: "Por favor ingresa el tipo de Inmueble.",
					icon: "warning",
					dangerMode: true,	
				});
				$('#inmueble').focus();
			}
			else if ($('#cuidad').val() == "") {
				swal({
					title: "Datos incompletos",
					text: "Por favor ingresa la Ciudad.",
					icon: "warning",
					dangerMode: true,	
				});
				$('#cuidad').focus();
			}
			else if ($('#barrio').val() == "") {
				swal({
					title: "Datos incompletos",
					text: "Por favor ingresa el Barrio.",
					icon: "warning",
					dangerMode: true,	
				});
				$('#barrio').focus();
			}
			else if ($('#antiguedad').val() == "") {
				swal({
					title: "Datos incompletos",
					text: "Por favor ingresa la Antiguedad del Inmueble.",
					icon: "warning",
					dangerMode: true,	
				});
				$('#antiguedad').focus();
			}
			else {
				swal({
					title: "¡Registro exitoso!",
					text: "Nos contactarémos contigo muy pronto.",
					icon: "success",
					dangerMode: true,		
				});
				//swal("¡Registro exitoso!", "Nos contactarémos contigo muy pronto.", "success");
			}
		}

		// Altura video
		if ($('.galeria a:first-child').length) {
			var alturaVideo = $('.galeria a:first-child').height();
			$('.galeria iframe').height(alturaVideo-5);
			$(window).resize(function() {
				var alturaVideo = $('.galeria a:first-child').height();
				$('.galeria iframe').height(alturaVideo-5);
			});			
		}


		// Alert Agendar cita
		$('#agenda_cita_link').on('click', function() {
			swal({
				title: "¡Hola!",
				text: "Recuerda que puedes programar tus citas de Lunes a Domingo de 7:00 am a 7:00 pm, con al menos 2 horas de anticipación y un máximo de 15 días siguientes a partir de la fecha actual.",
				icon: "warning",
				dangerMode: true,		
			});
		});


		// Propiedades calendario
		var futureDate = new Date();
		futureDate.setDate(futureDate.getDate() + 15);
		//var as = currentDate.getDate();
		$('.calendarClass').datepicker({
		    language: 'en',
		    minDate: new Date(),
		    maxDate: futureDate,
		    minHours: 7,
		    maxHours: 18
		});

		// OnClick agendar cita
		$('#btn_form_agendar').on('click', function() {
			var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if ($('#nombre').val() == "") {
				swal({
					title: "Datos incompletos",
					text: "Por favor ingresa tu Nombre.",
					icon: "warning",
					dangerMode: true,
				});
				$('#nombre').focus();
			}
			else if ($('#celular').val() == "") {
				swal({
					title: "Datos incompletos",
					text: "Por favor ingresa tu número telefónico.",
					icon: "warning",
					dangerMode: true,	
				});
				$('#celular').focus();
			}
			else if ($('#email').val() == "") {
				swal({
					title: "Datos incompletos",
					text: "Por favor ingresa tu correo electrónico.",
					icon: "warning",
					dangerMode: true,	
				});
				$('#email').focus();
			}
			else if (!regex.test($('#email').val())) {
	  			swal({
					title: "Datos incorrectos",
					text: "Por favor ingresa un correo electrónico válido.",
					icon: "error",
					dangerMode: true,
				});
				$('#email').focus();
			}
			else if ($('#agendarCalendar').val() == "") {
				swal({
					title: "Datos incompletos",
					text: "Por favor selecciona una fecha y hora para agendar la cita.",
					icon: "warning",
					dangerMode: true,
				});
			}
			else {
				// Variables de fechas
				var fechaAgenda = $('#agendarCalendar').val();
				var diaAgenda = fechaAgenda.substring(0, 2);
				var mesAgenda = fechaAgenda.substring(3, 5);
				var anoAgenda = fechaAgenda.substring(6, 10);
				var horaAgenda = fechaAgenda.substring(11, 19);
				switch (mesAgenda) { 
					case "01": 
						mesAgenda = "Enero";
						break;
					case "02": 
						mesAgenda = "Febrero";						
						break;
					case '03': 
						mesAgenda = "Marzo";						
						break;		
					case '04': 
						mesAgenda = "Abril";						
						break;
					case '05': 
						mesAgenda = "Mayo";						
						break;
					case '06': 
						mesAgenda = "Junio";						
						break;
					case '07': 
						mesAgenda = "Julio";						
						break;
					case '08': 
						mesAgenda = "Agosto";						
						break;
					case '09': 
						mesAgenda = "Septiembre";						
						break;
					case '10': 
						mesAgenda = "Octubre";						
						break;
					case '11': 
						mesAgenda = "Noviembre";						
						break;
					case '12': 
						mesAgenda = "Diciembre";						
						break;
					default:
						mesAgenda = "No mes";
				}

				swal({
				  title: "¿Deseas Continuar?",
				  text: "Haz seleccionado tu cita para el " + diaAgenda + " de " + mesAgenda + " de " + anoAgenda + " a las " + horaAgenda,
				  icon: "warning",
				  buttons: ["Cancelar", "Continuar"],
				  dangerMode: true,
				})
				.then((continuarAgenda) => {
				  if (continuarAgenda) {
				    swal("Tu cita fue agendada correctamente, nos pondrémos en contacto contigo muy pronto.", {
				      icon: "success",
				      dangerMode: true,
				    });
				  } else {
				    swal("La cita no fue agendada.", {
				    	dangerMode: true,
				    });
				  }
				});
			}
		});

		// Menu responsive
		$('.menu-movil').on('click', function() {
			$('.navegacion-principal').slideToggle();
		});

		// Menu activado
		// $('.navegacion-principal a').on('click', function() {
		// 	$('.navegacion-principal a').removeClass('activo');
		// 	$(this).addClass('activo');
		// });

		// Programa conferencia
		$('.programa-evento .info-curso:first').show();
		$('.menu-programa a:first').addClass('activo');

		$('.menu-programa a').on('click', function() {
			$('.menu-programa a').removeClass('activo');
			$(this).addClass('activo');
			$('.ocultar').hide();
			var enlace = $(this).attr('href');
			$(enlace).fadeIn(500);

			return false;
		});

		// Funcion para la animación de los numeros
		function animarNumeros() {
			$('.resumen-evento li:nth-child(1) p').animateNumber({number: 6}, 1200);
			$('.resumen-evento li:nth-child(2) p').animateNumber({number: 15}, 1500);
			$('.resumen-evento li:nth-child(3) p').animateNumber({number: 3}, 1400);
			$('.resumen-evento li:nth-child(4) p').animateNumber({number: 9}, 1500);
		}

		// Cuenta regresiva
		$('.cuenta-regresiva').countdown('2018/10/08 14:00:00', function(event) {
			$('#dias').html(event.strftime('%D'));
			$('#horas').html(event.strftime('%H'));
			$('#minutos').html(event.strftime('%M'));
			$('#segundos').html(event.strftime('%S'));		
		})


	});