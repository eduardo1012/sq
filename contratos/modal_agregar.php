<!--Modal-->
		<form id="formAddNewRow" enctype="multipart/form-data" method="post" action="">
			<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
		<div class="modal fade" id="mcModalIniciativas" tabindex="-1" role="dialog" aria-labelledby="mcModalIniciativas" aria-hidden="true">
			<div class="modal-dialog modal-lg" id="mdialTamanio">
			
			<div class="modal-content">
				<div class="modal-header">
					<div class="col">
					   <span class="float-left "> <h4 class="font-weight">Agregar un nuevo cliente</h4> </span>
					</div>
					<div class="col-12 col-md-auto">
					</div>
					<div class="col col-lg-2">
					   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
					</div>	
				</div>
			<div class="modal-body">
				<div id="conte-modal" class="jumbotron my-lg-0">
						<div class="row " >
							<div class="col-sm-4">
								<label for="nNombre" class="font-weight-normal text-md-left" >ID contrato</label>
							</div>
							<div class="col-sm-8">
								<input type="text" id="nNombre" name="nNombre" class="form-control form-control-sm" required>
								<div id="resultado" class="alert alert-success" role="alert"></div>  <!--En este codigo se llama el resultado de la busqueda en este caso se esta buscando por ID-->
							</div>
						</div>
						<br>
						
						<div class="row " >
							<div class="col-sm-4">
								<label for="nMail2" class="font-weight-normal text-md-left">Referencia</label>
							</div>
							<div class="col-sm-8">
								<input type="text" id="nMail2" name="nMail2" class="form-control form-control-sm" required>
							</div>
						</div>
						<br>
						
						<div class="row " >
							<div class="col-sm-4">
								<label for="nNombre" class="font-weight-normal text-md-left">Nombre Cliente</label>
							</div>
							<div class="col-sm-8">
								<input type="text" id="nNombres" name="nNombres" class="form-control form-control-sm" required>
							</div>
						</div>
						<br>
						<hr>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<label for="nCalle" class="font-weight-normal text-md-left">Calle</label>
								<input type="text" id="nCalle" name="nCalle" class="form-control form-control-sm" required>
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-6">
										<label for="nExterior" class="font-weight-normal text-md-left">No. Exterior</label>
										<input type="text" id="nExterior" name="nExterior" class="form-control form-control-sm" required>
									</div>
									<div class="col-sm-6">
										<label for="nInterior" class="font-weight-normal text-md-left" >No. Interior</label>
										<input type="text" id="nInterior" name="nInterior" class="form-control form-control-sm" >
									</div>
								</div>
							</div>
						</div>
						<br>					
						<div class="row">
							<div class="col-sm-8">
								<label for="nColonia" class="font-weight-normal text-md-left">Colonia</label>
								<input type="text" id="nColonia" name="nColonia" class="form-control form-control-sm" required>
							</div>
							<div class="col-sm-4">
								<label for="nCp" class="font-weight-normal text-md-left" >Codigo Postal</label>
								<input type="number" id="nCp" name="nCp" class="form-control form-control-sm" required maxlength="5">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<label for="nMunicipio" class="font-weight-normal text-md-left" >Municipio</label>
								<input type="text" id="nMunicipio" name="nMunicipio" class="form-control form-control-sm" required>
							</div>
							<div class="col-sm-4">
								<label for="nEstado" class="font-weight-normal text-md-left">Estado</label>
								<input type="text" id="nEstado" name="nEstado" class="form-control form-control-sm" required>
							</div>
							<div class="col-sm-4">
								<label for="nTel1" class="font-weight-normal text-md-left" >Telefono Principal</label>
								<input type="number_format" id="nTel1" name="nTel1" class="form-control form-control-sm" required maxlength="10">
							</div>
						</div>
						<br>
						<hr>
						<br>
						<div class="row">
							<div class="col-sm-8">
								<label for="nRespon" class="font-weight-normal text-md-left" >Responsable/Aval </label>
								<input type="text" id="nRespon" name="nRespon" class="form-control form-control-sm" required>
							</div>
							<div class="col-sm-4">
								<label for="nMovil" class="font-weight-normal text-md-left" >Telefono del Aval</label>
								<input type="text" id="nMovil" name="nMovil" class="form-control form-control-sm" required maxlength="10">
							</div>
							<div class="col-sm-8">
								<label for="nPais" class="font-weight-normal text-md-left" >Direccion del Responsable/Aval</label>
								<input type="text" id="nPais" name="nPais" class="form-control form-control-sm" required>
							</div>
						</div>
						
						<div class="row">
							
						</div>
						<br>
						<hr>
						<br>
						<div class="col-sm-6">
						<label for="nMail2">Dia de cobro</label>
								<br>
								  <input type="radio" value="Lunes" id="nTel2" name="nTel2"  checked> Lunes<br><br>
								  <input type="radio" value="Martes" id="nTel2" name="nTel2" > Martes<br><br>
								  <input type="radio" value="Miercoles" id="nTel2" name="nTel2" > Miercoles<br><br>
								  <input type="radio" value="Jueves" id="nTel2" name="nTel2" > Jueves<br><br>
								  <input type="radio" value="Viernes" id="nTel2" name="nTel2" > Viernes<br><br>
								  <input type="radio" value="Sabado" id="nTel2" name="nTel2" > Sabado<br><br>
						</div>	
					</div>
			</div>
			<div class="modal-footer">
				<button id="btnCerrar" type="button" class="btn btn-warning btn-sm my-0" data-dismiss="modal">Cancelar</button>
				<button id="btnGuardar" type="submit" class="btn btn-primary btn-sm my-0">Guardar</button>
			</div>
			</div>
			
			</div>
		</div>
		
		</form>

