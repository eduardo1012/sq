<!--Modal-->
 <!-- Desarrollado por Daniel Arochi: ing.arochi@gmail.com | www.arochisolutions.com -->
<form id="actualidarDatos">
		<div class="modal fade" id="mConsulta"  aria-labelledby="mConsulta" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="col">
					   <span class="float-left "> <h4 class="font-weight">Consulta de Clientes</h4> </span> 
					  
					</div>
					<div class="col-12 col-md-auto">
					</div>
					<div class="col col-lg-2">
					   <button type="button" class="close" data-dismiss="modal" data-backdrop="false"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>

					</div>	

				</div>
				
				<div class="modal-body">

					<div id="datos_ajax"></div>

					<div id="conte-modal" class="jumbotron my-lg-0">
						<div class="row " >
							<div class="col-sm-4">
								<img src="./img/prestamo.jpg" class="img-fluid" alt="">	
							</div>
							<div class="col-sm-8">
								<br><br>
								<br>
								<label for="nNombres">ID contrato</label>
								<input type="text" id="id_proveedor" name="id_proveedor" class="form-control form-control-sm" readonly="true">
								<label for="nNombre">Nombre</label>
								<input type="text" id="nNombre" name="nNombre" class="form-control form-control-sm" >
								
							</div>

						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<label for="nCalle">Calle</label>
								<input type="text" id="nCalle" name="nCalle" class="form-control form-control-sm" >
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-6">
										<label for="nExterior">No. Exterior</label>
										<input type="text" id="nExterior" name="nExterior" class="form-control form-control-sm" required>
									</div>
									<div class="col-sm-6">
										<label for="nInterior">No. Interior</label>
										<input type="text" id="nInterior" name="nInterior" class="form-control form-control-sm" >
									</div>
								</div>
							</div>
						</div>
						<br>					
						<div class="row">
							<div class="col-sm-8">
								<label for="nColonia">Colonia</label>
								<input type="text" id="nColonia" name="nColonia" class="form-control form-control-sm" required>
							</div>
							<div class="col-sm-4">
								<label for="nCp">Codigo Postal</label>
								<input type="text" id="nCp" name="nCp" class="form-control form-control-sm" required>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<label for="nMunicipio">Municipio</label>
								<input type="text" id="nMunicipio" name="nMunicipio" class="form-control form-control-sm" required>
							</div>
							<div class="col-sm-4">
								<label for="nEstado">Estado</label>
								<input type="text" id="nEstado" name="nEstado" class="form-control form-control-sm" required>
							</div>
							<div class="col-sm-4">
								<label for="nTel1">Telefono Principal</label>
								<input type="text" id="nTel1" name="nTel1" class="form-control form-control-sm" required>
							</div>
						</div>
						<br>
						<hr>
						<br>
						<div class="row">
							<div class="col-sm-8">
								<label for="nRespon">Responsable/Aval </label>
								<input type="text" id="nRespon" name="nRespon" class="form-control form-control-sm" required>
							</div>
							<div class="col-sm-4">
								<label for="nMovil">Telefono Responsable/Aval </label>
								<input type="text" id="nMovil" name="nMovil" class="form-control form-control-sm" required>
							</div>
							<div class="col-sm-8">
								<label for="nPais">Direccion del Responsable/Aval</label>
								<input type="text" id="nPais" name="nPais" class="form-control form-control-sm" required>
							</div>
						</div>

						<br>
						<hr>
						<br>

						<div class="row">
							
							<div class="col-sm-6">
								<label for="nMail2">Referencia</label>
								<input type="text" id="nMail2" name="nMail2" class="form-control form-control-sm" required readonly="true">
							</div>
							<div class="col-sm-6">
								<label for="nMail2">Dia de cobro</label>
								<input type="text" id="nTel2" name="nTel2" class="form-control form-control-sm" required readonly="true">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<label for="nFecha">Fecha</label>
								<input type="text" id="nFecha" name="nFecha" class="form-control form-control-sm" required>
							</div>
							<div class="col-sm-4">
								<label for="nImporte">Importe del mutuo</label>
								<input type="text" id="nImporte" name="nImporte" class="form-control form-control-sm" required>
							</div>
							<div class="col-sm-4">
								<label for="nRefrendo">Por refrendo</label>
								<input type="text" id="nRefrendo" name="nRefrendo" class="form-control form-control-sm" required>
							</div>
							<div class="col-sm-4">
								<label for="nDesempeno">Por desempeño</label>
								<input type="text" id="nDesempeno" name="nDesempeno" class="form-control form-control-sm" required>
							</div>
							<div class="col-sm-4">
								<label for="nAbonoc">Abono a capital</label>
								<input type="text" id="nAbonoc" name="nAbonoc" class="form-control form-control-sm" required>
							</div>
						</div>
						<br>
						<br>

						<div class="row">
						<div class="col-sm-6">

							
						</div>

					</div>
					<br>
							<div align="center"><input type="image" src="img/editar.jpg" width="30%" name="blacklist" value="2"></input></div>
							<br>
							<br>
				
					<table id="tContratos" class="table  table-striped table-bordered table-sm table-hover" >
						<thead>
							<tr>
							 
							  <th class="th-sm" scope="col">ID</th>
							  <th class="th-sm" scope="col">Fecha</th>
							  <th class="th-sm" scope="col">Importe del mutuo</th>
							  <th class="th-sm" scope="col">Por refrendo</th>
							  <th class="th-sm" scope="col">Por desempeño</th>
							  <th class="th-sm" scope="col">Abono a capital</th>
								
						
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				
					</div>

				</div>											
			</div>


			</div>

		</div>


</form>	




