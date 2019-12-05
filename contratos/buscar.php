<?php
 
		  		
      $buscar = $_POST['b'];
       
      if(!empty($buscar)) {
            buscar($buscar);
      }
	  else{
		
	  }
       
      function buscar($b) {
            
            # conectare la base de datos
			$con=@mysqli_connect('localhost', 'root', '', 'contratos');
			if(!$con){
				die("imposible conectarse: ".mysqli_error($con));
			}
			if (@mysqli_connect_errno()) {
				die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
			}
       
            $sql = "SELECT *, count(*) AS numrows FROM proveedores WHERE id_proveedor= '$b'";
			$count_query = mysqli_query($con,$sql);
			
			if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
			
			if ($numrows>0){
				if($row['eliminado']==0)
				{
					echo "Este cliente ya Existe! Nombre del cliente= ".$row['nombre'];
					
					echo'
						<button type="button" class="btn btn-info btn-rounded btn-sm my-0" data-toggle="modal" data-target="#mConsulta" 
							data-id_proveedor="'.$row['id_proveedor'].'"
							data-nombre="'.$row['nombre'].'"
							data-calle="'.$row['calle'].'"
							data-noexterior="'.$row['noExterior'].' "
							data-nointerior="'.$row['noInterior'].' "
							data-colonia="'.$row['colonia'].' "
							data-cp="'.$row['cp'].'"
							data-municio="'.$row['municio'].'"
							data-estado="'.$row['estado'].'"
							data-pais="'.$row['pais'].'"
							data-responsable="'.$row['responsable'].'"
							data-movil="'.$row['movil'].'"
							data-mail1="'.$row['mail1'].'"
							data-mail2="'.$row['RFC'].'"
							data-telefono1="'.$row['telefono1'].'"
							data-telefono2="'.$row['telefono2'].'"
							> Ver <i class="fa fa-eye"></i> </button>
						';					
					
				} else {
					echo "Este provedor se encuentra eliminado! Nombre del Proveedor= ".$row['nombre'];
					echo '<button type="button" class="btn btn-danger btn-rounded btn-sm my-0" data-toggle="modal" data-target="#dataActive" data-id_proveedor="'.$row['id_proveedor'].'" >Activar</button> ';
				}
			echo '	<script> $("#btnGuardar").prop("disabled", true); </script> ';
			} else{
					echo "Proveedor Valido! ";
					echo '	<script> $("#btnGuardar").prop("disabled", false); </script> ';
			}      
      }     
?>