<?php 
	# conectare la base de datos
    $con=@mysqli_connect('localhost', 'root', '', 'contratos');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		include 'pagination.php'; //incluir el archivo de paginación
		//las variables de paginación
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 12; //la cantidad de registros que desea mostrar
		$adjacents  = 4; //brecha entre páginas después de varios adyacentes
		$offset = ($page - 1) * $per_page;
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM proveedores,pago WHERE eliminado = 0 ");
		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		$reload = 'contrato.php';
		//consulta principal para recuperar los datos
		$query = mysqli_query($con,"SELECT * FROM proveedores,pago WHERE eliminado=0 and id_proveedor = id_proveedo  order by id_proveedor LIMIT $offset,$per_page");
		$query2 = mysqli_query($con,"SELECT * FROM pago");
		if ($numrows>0){
			?>
				
				<table id="tContratos" class="table  table-striped table-bordered table-sm table-hover" width="100%">
				<thead>
					<tr>
						  <th class="th-sm" scope="col">ACCIONES</th>
						  <th class="th-sm" scope="col">ID</th>
						  <th class="th-sm" scope="col">NOMBRE DEL CLIENTE</th>
						  <th class="th-sm" scope="col">REFERENCIA</th>
						  <th class="th-sm" scope="col">CALLE</th>
						  <th class="th-sm" scope="col">No. EXTERIOR</th>
						  <th class="th-sm" scope="col">No. INTERIOR</th>
						  <th class="th-sm" scope="col">COLONIA</th>
						  <th class="th-sm" scope="col">CODIGO POSTAL</th>
						  <th class="th-sm" scope="col">MUNICIPIO</th>
						  <th class="th-sm" scope="col">ESTADO</th>
						  <th class="th-sm" scope="col">DIRECCION AVAL</th>
						  <th class="th-sm" scope="col">AVAL</th>
						  <th class="th-sm" scope="col">TELEFONO AVAL</th>
				
						  <th class="th-sm" scope="col">TELEFONO PRINCIPAL</th>
						  <th class="th-sm" scope="col">Dia de cobro</th>
					</tr>
				</thead>
				<tbody>
			<?php
					while ($columna = mysqli_fetch_array( $query ))
									{
										echo'
											<tr>
												  <td class="td-sm" height="25"> <center>
													<button type="button" 
														class="btn btn-info btn-rounded btn-sm my-0" data-toggle="modal" data-target="#mConsulta" 
															data-id_proveedor="'.$columna['id_proveedor'].'"
															data-nombre="'.$columna['nombre'].'"
															data-calle="'.$columna['calle'].'"
															data-noexterior="'.$columna['noExterior'].' "
															data-nointerior="'.$columna['noInterior'].' "
															data-colonia="'.$columna['colonia'].' "
															data-cp="'.$columna['cp'].'"
															data-municio="'.$columna['municio'].'"
															data-estado="'.$columna['estado'].'"
															data-pais="'.$columna['pais'].'"
															data-responsable="'.$columna['responsable'].'"
															data-movil="'.$columna['movil'].'"
															data-mail1="'.$columna['mail1'].'"
															data-mail2="'.$columna['RFC'].'"
															data-telefono1="'.$columna['telefono1'].'"
															data-telefono2="'.$columna['fecha'].'"
															data-fecha="'.$columna['fecha'].'"
															data-importe="'.$columna['mutuo'].'"
															data-refrendo="'.$columna['refrendo'].'"
															data-desempeno="'.$columna['desempeno'].'"
															data-abono="'.$columna['abono'].'"
															> 

															<i class="fa fa-eye"></i> </button>
													
													<button type="button" class="btn btn-danger btn-rounded btn-sm my-0" data-toggle="modal"   data-target="#dataDelete" data-id_proveedor="'.$columna['id_proveedor'].'" > <i class="fa fa-remove"></i> </button>

												 </td>
													
												  <td scope="row" class="font-weight-normal td-sm" height="25">'.$columna['id_proveedor'].'</td>
												  <td class="font-weight-normal td-sm" height="25">'.$columna['nombre'].'</td>
												  <td class="font-weight-normal td-sm" height="25">'.$columna['RFC'].'</td>
												  <td class="font-weight-normal td-sm" height="25">'.$columna['calle'].'</td>
												  <td class="font-weight-normal td-sm" height="25">'.$columna['noExterior'].'</td>
												  <td class="font-weight-normal td-sm" height="25">'.$columna['noInterior'].'</td>
												  <td class="font-weight-normal td-sm" height="25">'.$columna['colonia'].'</td>
												  <td class="font-weight-normal td-sm" height="25">'.$columna['cp'].'</td>
												  <td class="font-weight-normal td-sm" height="25">'.$columna['municio'].'</td>
												  <td class="font-weight-normal td-sm" height="25">'.$columna['estado'].'</td>
												  <td class="font-weight-normal td-sm" height="25">'.$columna['pais'].'</td>
												  <td class="font-weight-normal td-sm" height="25">'.$columna['responsable'].'</td>
												  <td class="font-weight-normal td-sm" height="25">'.$columna['movil'].'</td>
												 
												  
												  <td class="font-weight-normal td-sm" height="25">'.$columna['telefono1'].'</td>
												  <td class="font-weight-normal td-sm" height="25">'.$columna['telefono2'].'</td>
											</tr>
										';						
									}
			?>
			</tbody>
		</table>
		<div class="table-pagination pull-right" >
			<br><br>
			<nav aria-label="Page navigation example">
			<?php echo paginate($reload, $page, $total_pages, $adjacents);?>
			</nav>
		</div>
		
			<?php
			
		} else {
			?>
			<div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>Aviso!!!</h4> No hay datos para mostrar
            </div>
			<?php
		}
	}
?>

