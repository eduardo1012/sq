<?php 
	//BASE DE DATOS
	$con=@mysqli_connect('localhost', 'root', '', 'contratos');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }	
				$destino = "./img/";
				$nom = $_REQUEST["nNombre"];
				$nombres= "1".$nom;
					if(isset($_GET['files']))
					{	
						$error = false;
						$messages[] = "	AQUI ESTOY 132.";
						$uploaddir = './img/proveedores/';
						global $nombres, $a;
						$a=$nombres;
						foreach($_FILES as $file)
						{
							if(move_uploaded_file($file['tmp_name'], $uploaddir .$a. basename($file['name'])))
							{
								global $destino;
								$destino= $destino . $uploaddir .$nombres.$file['name'];
								$messages[] = $GLOBALS['destino'];
							}
							else
							{
								$error = true;
							}
						}
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
				$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nNombres"],ENT_QUOTES)));
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
				$mail2=mysqli_real_escape_string($con,(strip_tags($_POST["nMail2"],ENT_QUOTES)));
				$tel1=mysqli_real_escape_string($con,(strip_tags($_POST["nTel1"],ENT_QUOTES)));
				$tel2=mysqli_real_escape_string($con,(strip_tags($_POST["nTel2"],ENT_QUOTES)));
				
				$sql="INSERT INTO proveedores (id_proveedor, nombre, calle, noExterior, noInterior, colonia, cp, pais, estado, municio, responsable, movil, mail1, RFC, telefono1, telefono2, logo, eliminado) 
				VALUES ('".$nombres."','".$nombre."','".$calle."','".$exterior."', '".$interior."', '".$colonia."', '".$cp."', '".$pais."', '".$estado."', '".$municipio."' , '".$responsable."', '".$movil."', '".$mail1."', '".$mail2."', '".$tel1."', '".$tel2."', '".$GLOBALS['destino']."', '0'	)";
		
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