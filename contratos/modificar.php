<?php
/*-----------------------
Autor: Obed Alvarado
http://www.obedalvarado.pw
Fecha: 27-02-2016
Version de PHP: 5.6.3
----------------------------*/
	# conectare la base de datos
    $con=@mysqli_connect('localhost', 'root', '', 'contratos');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	
	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['nNombre'])){
			$errors[] = "Nombre vacío";
		} else if (empty($_POST['nCalle'])){
			$errors[] = "Calle vacío";
		} else if (empty($_POST['nExterior'])){
			$errors[] = "No. Exterior vacío";
		} else if (empty($_POST['nCp'])){
			$errors[] = "Cp vacío";
		} else if (empty($_POST['nRespon'])){
			$errors[] = "Resposable vacío";
		}   else if (
			!empty($_POST['nNombre']) && 
			!empty($_POST['nCalle']) &&
			!empty($_POST['nExterior']) &&
			!empty($_POST['nCp']) &&
			!empty($_POST['nRespon'])
			
		){
		
		
		
		$nombres=mysqli_real_escape_string($con,(strip_tags($_POST["nNombre"],ENT_QUOTES)));		
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id=mysqli_real_escape_string($con,(strip_tags($_POST["id_proveedor"],ENT_QUOTES)));

		$calle=mysqli_real_escape_string($con,(strip_tags($_POST["nCalle"],ENT_QUOTES)));
		$exterior=mysqli_real_escape_string($con,(strip_tags($_POST["nExterior"],ENT_QUOTES)));
		$interior=mysqli_real_escape_string($con,(strip_tags($_POST["nInterior"],ENT_QUOTES)));
		$colonia=mysqli_real_escape_string($con,(strip_tags($_POST["nColonia"],ENT_QUOTES)));
		$cp=mysqli_real_escape_string($con,(strip_tags($_POST["nCp"],ENT_QUOTES)));
		$municipio=mysqli_real_escape_string($con,(strip_tags($_POST["nMunicipio"],ENT_QUOTES)));
		$estado=mysqli_real_escape_string($con,(strip_tags($_POST["nEstado"],ENT_QUOTES)));
		$pais=mysqli_real_escape_string($con,(strip_tags($_POST["nPais"],ENT_QUOTES)));
		$responsable=mysqli_real_escape_string($con,(strip_tags($_POST["nRespon"],ENT_QUOTES)));
		$movil=mysqli_real_escape_string($con,(strip_tags($_POST["nMovil"],ENT_QUOTES)));
		$mail1=mysqli_real_escape_string($con,(strip_tags($_POST["nMail1"],ENT_QUOTES)));
		$mail2=mysqli_real_escape_string($con,(strip_tags($_POST["nMail2"],ENT_QUOTES))); //referencia de nombre
		$tel1=mysqli_real_escape_string($con,(strip_tags($_POST["nTel1"],ENT_QUOTES)));
		$tel2=mysqli_real_escape_string($con,(strip_tags($_POST["nTel2"],ENT_QUOTES)));  //dia de cobro 
		
		$sql="UPDATE proveedores set id_proveedor='".$id."',nombre='".$nombres."',calle='".$calle."',noExterior=".$exterior.",noInterior='".$interior."',colonia='".$colonia."',cp=".$cp.",pais='".$pais."',estado='".$estado."',municio='".$municipio."',responsable='".$responsable."',movil='".$movil."',mail1='".$mail1."',mail1='".$mail1."',telefono1='".$tel1."',telefono2='".$tel2."' WHERE id_proveedor='".$id."';";

		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido guardados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>	