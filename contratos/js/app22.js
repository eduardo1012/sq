	function activarlos() {
		  /*document.getElementById("nTel9").disabled = false;
		  document.getElementById("nCalle").disabled = false;*/
		  document.getElementById('nNombre').disabled = false;
		  /*document.getElementById('nExterior').disabled = true;
		  document.getElementById('nInterior').disabled = true;
		  document.getElementById('nColonia').disabled = true;
		  document.getElementById('nCp').disabled = true;
		  document.getElementById('nMunicipio').disabled = true;
		  document.getElementById('nEstado').disabled = true;
		  document.getElementById('nPais').disabled = true;
		  document.getElementById('nMovil').disabled = true;
		  document.getElementById('nRespon').disabled = true;
		  document.getElementById('nMail1').disabled = true;
		  document.getElementById('nMail2').disabled = true;
		  document.getElementById('nTel1').disabled = true;*/
		}
	function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'paises_ajax.php',
			data: parametros,
			 beforeSend: function(objeto){
			$("#loader").html("<img src='loader.gif'>");
			},
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		});
	}
	
		//MODAL CONSULTA DE PROVEEDOR
		$('#mConsulta').on('show.bs.modal', function (event) {
			$('#mcModalIniciativas').modal('hide');
			$('.modal-backdrop').hide();
		  
		  	var button = $(event.relatedTarget) // Botón que activó el modal
		  	var id_proveedor = button.data('id_proveedor') // Extraer la información de atributos de datos
		  	var nombre = button.data('nombre') // Extraer la información de atributos de datos
			var nCalle = button.data('calle') // Extraer la información de atributos de datos
			var noexterior = button.data('noexterior') // Extraer la información de atributos de datos
			var nointerior = button.data('nointerior') // Extraer la información de atributos de datos
			var nColonia = button.data('colonia') // Extraer la información de atributos de datos
			var nCp = button.data('cp') // Extraer la información de atributos de datos
			var nMunicipio = button.data('municio') // Extraer la información de atributos de datos
			var nEstado = button.data('estado') // Extraer la información de atributos de datos
			var nPais = button.data('pais') // Extraer la información de atributos de datos
			var nRespon = button.data('responsable') // Extraer la información de atributos de datos
			var nMovil = button.data('movil') // Extraer la información de atributos de datos
			var nMail1 = button.data('mail1') // Extraer la información de atributos de datos
			var nMail2 = button.data('mail2') // Extraer la información de atributos de datos
			var nTel1 = button.data('telefono1') // Extraer la información de atributos de datos
			var nTel2 = button.data('telefono2') // Extraer la información de atributos de datos
			  
			  
			  var modal = $(this)
			  modal.find('.modal-title').text('Modificar: '+nNombre)
			  modal.find('.modal-body #id_proveedor').val(id_proveedor)
			  modal.find('.modal-body #nNombre').val(nombre)
			  modal.find('.modal-body #nCalle').val(nCalle)
			  modal.find('.modal-body #nExterior').val(noexterior)
			  modal.find('.modal-body #nInterior').val(nointerior)
			  modal.find('.modal-body #nColonia').val(nColonia)
			  modal.find('.modal-body #nCp').val(nCp)
			  
			  modal.find('.modal-body #nMunicipio').val(nMunicipio)
			  modal.find('.modal-body #nEstado').val(nEstado)
			  modal.find('.modal-body #nPais').val(nPais)
			  modal.find('.modal-body #nRespon').val(nRespon)
			  modal.find('.modal-body #nMovil').val(nMovil)
			  modal.find('.modal-body #nMail1').val(nMail1)
			  modal.find('.modal-body #nMail2').val(nMail2)
			  modal.find('.modal-body #nTel1').val(nTel1)
			  modal.find('.modal-body #nTel2').val(nTel2)
			  
			  $('.alert').hide();//Oculto alert
		});
		
		
		//MODAL ELIMINAR
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id_proveedor = button.data('id_proveedor') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#id_proveedor').val(id_proveedor)
		});
		
		//MODAL ACTIVAR
		$('#dataActive').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id_proveedor = button.data('id_proveedor') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#id_proveedor').val(id_proveedor)
		});
		
		
		//MODAL AGREGAR - AGREGAR PHP
		$( "#formAddNewRow" ).submit(function( event ) {
		$('.alert').hide();//Oculto alert
		
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "submit.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax_register").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$('#mcModalIniciativas').modal('hide');
					if ($('.modal-backdrop').is(':visible')) {
						$('body').removeClass('modal-open'); 
						$('.modal-backdrop').remove(); 
					};
					$("#datos_ajax_register").html(datos);
					load(1);
					
					//LIMPIAR CAMPOS
					$('#nNombre').val("");
					$('#nNombres').val("");
					$('#nCalle').val("");
					$('#nExterior').val("");
					$('#nInterior').val("");
					$('#nColonia').val("");
					$('#nCp').val("");
					$('#nMunicipio').val("");
					$('#nEstado').val("");
					$('#nPais').val("");
					$('#nRespon').val("");
					$('#nMovil').val("");
					$('#nMail1').val("");
					$('#nMail2').val("");
					$('#nTel1').val("");
					$('#nTel2').val("");
					
				  }
			});
						
		  event.preventDefault();
		});
		
		// ACTUALIZAR DATOS PHP
		$( "#actualidarDatos" ).submit(function( event ) {
			var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modificar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
		//ELIMINAR DATOS PHP
		$( "#eliminarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "eliminar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax_delete").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$('#dataDelete').modal('hide');
					load(1);
					$('.modal-backdrop').hide();
					$(".datos_ajax_delete").html(datos);
				  }
			});
		  event.preventDefault();
		});
		
		//ACTIVAR DATOS PHP
		$( "#activarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "activar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax_delete").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$('#dataActive').modal('hide');
					$('#mcModalIniciativas').modal('hide');
					load(1);
					$('.modal-backdrop').hide();
					$(".datos_ajax_delete").html(datos);
				  }
			});
		  event.preventDefault();
		});
		
		//BOTON CERRAR - LIMPIAR FORMULARIO
		$("#btnCerrar").on("click",function(event){ 
			$('#nNombre').val("");
			$('#nCalle').val("");
			$('#nExterior').val("");
			$('#nInterior').val("");
			$('#nColonia').val("");
			$('#nCp').val("");
			$('#nMunicipio').val("");
			$('#nEstado').val("");
			$('#nPais').val("");
			$('#nRespon').val("");
			$('#nMovil').val("");
			$('#nMail1').val("");
			$('#nMail2').val("");
			$('#nTel1').val("");
			$('#nTel2').val(""); 
		});
		