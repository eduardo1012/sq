<!DOCTYPE html>
  <!-- Desarrollado por Daniel Arochi: ing.arochi@gmail.com | www.arochisolutions.com -->
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Prestamos del potosi</title>
  <!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Your custom styles (optional)  <link href="css/style.css" rel="stylesheet">-->
	
  <!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">
  
  <!-- JQuery -->
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="script.js"></script>
  
  <!-- Data picker -->
	<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	
	<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:450px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}

			
			
		</style>	
</head>

<body >
	<?php include("modal_agregar.php");?>
    <?php include("modal_consultar.php");?>
    <?php include("modal_eliminar.php");?>
	<?php include("modal_activar.php");?>
	<?php include("modal_editar.php");?>
	<?php include("paises_ajax.php");?>
  <!-- Start your project here-->

		<!--Main layout-->
		
		<main >

		<!--Main container-->
		<div class="container-fluid" style="position:absolute;">
		<header >
					<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					  <a class="navbar-brand" href="index.html">Sistema de Cobranza del Potosi v2.3</a>
					  
					  <div id="header">
			<ul class="nav">
				<li><a href="">Busqueda de cliente</a></li>
				
				</li>
				<li><a href="">Salir</a></li>
			</ul>
		</div>
					</nav>
		</header>
		
				<!--Grid row-->
				<div class="jumbotron my-0">
				<!--Tabla-->
				<div class="container-fluid">
					<div class="row">
						<div class="col">
						  <span class="float-left mb-1 mr-0"> <h4 class="font-weight-bold ">Listado de clientes</h4> </span>
							
								<input type="text" name="busqueda" id="busqueda" class="form-control form-control-sm" placeholder="Buscar" aria-controls="tContratos">
								<div id="resultados" class="alert alert-success" role="alert" style="display:none"></div>
						</div>
						<div class="col col-lg-2">
						  <span class=" float mb-1 mr-0"> <center> <a href="" id="accionar" class="btn btn-success btn-lg btn-sm mb-4" data-toggle="modal" data-target="#mcModalIniciativas" >Agregar<i class="fa fa-plus"></i> </a> </center> </span>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<br>
							<div class="datos_ajax_delete"></div><!-- Datos ajax Final -->
							<div id="datos_ajax_register"></div>
						</div>
					</div>	
		
					<div class="row">
						<div class="table-responsive text-nowrap">
							<div class="col">
								<div id="loader" class="text-center"> <img src="loader.gif"></div>
								<div class="outer_div"></div><!-- Datos ajax Final -->
							</div>
						</div> 
					</div>
				</div>
				<!--Paises-->
				</div>
				<!--Grid row-->
				
			<!--Footer-->
			<footer class="page-footer font-small bg-dark">
				<div class="footer-copyright text-center py-3">2019 Prestamos del Potosi |
				<a href="https://arochisolutions.com" target="_blank">© Desarrollada por: www.arochisolutions.com</a>
				</div>
			</footer>
			<!--Footer-->
		</div>

			<!--Main container-->
		</main>
		<!--Main layout-->	
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
	<script src="js/app.js"></script>
	
	<script>
		$(document).ready(function(){
			load(1);
		});
	</script>
	
	<script>
	$(document).ready(function(){                         
        var consulta;
        $("#nNombre").focus();
        $("#nNombre").keyup(function(e){                           
        consulta = $("#nNombre").val();
        $('#resultado').show();  
              $.ajax({
                    type: "POST",
                    url: "buscar.php",
                    data: "b="+consulta,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#resultado").html("<p align='center'><img src='loader.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#resultado").empty();
                          $("#resultado").append(data);                                         
                    }
              });                                                                    
        });                                                                  
	});
	</script>
	<script>
	$(document).ready(function(){                         
        var consulta;
        $("#busqueda").keyup(function(e){                           
        consulta = $("#busqueda").val();
		$('#resultados').show();  
              $.ajax({
                    type: "POST",
                    url: "buscart.php",
                    data: "b="+consulta,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#resultados").html("<p align='center'><img src='loader.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#resultados").empty();
                          $("#resultados").append(data);                                         
                    }
              });                                                                    
        }); 	
	});
	</script>
	
	<script>
	$("#accionar").click(function(){
		$('#resultado').hide();  
	});
	</script>
	
	<script>
	var fecha= document.getElementById('file');
	fecha.addEventListener('change', setText);

	function setText() {
		var texto = document.getElementById('nM');
		texto.value = fecha.value;
	}
	</script>


	



</body>
</html>