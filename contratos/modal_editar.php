<!--Modal-->
<form id="actualidarDatos">
		<div class="modal fade" id="mEditar"  aria-labelledby="mEditar" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="col">
					   <span class="float-left "> <h4 class="font-weight">Consulta de </h4> </span>
					</div>
					<div class="col-12 col-md-auto">
					</div>
					<div class="col col-lg-2">
					   <a href="#"><img src="img/listanegra.jpg"></a>
					</div>	
				</div>
				
				<div class="modal-body">
					<div id="datos_ajax"></div>
					<div id="conte-modal" class="jumbotron my-lg-0">
						<div class="row " >
							<div class="col-sm-4">
								<img src="./img/gm2.jpg" class="img-fluid" alt="">	
							</div>
							<div class="col-sm-8">
								<br><br>
								<input type="text" id="nNombre" name="nNombre" class="form-control form-control-sm" disabled>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<label for="nCalle">Calle</label>
								<input type="text" id="nCalle" name="nCalle" class="form-control form-control-sm" disabled>
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-6">
										<label for="nExterior">No. Exterior</label>
										<input type="text" id="nExterior" name="nExterior" class="form-control form-control-sm" disabled>
									</div>
									<div class="col-sm-6">
										<label for="nInterior">No. Interior</label>
										<input type="text" id="nInterior" name="nInterior" class="form-control form-control-sm" disabled>
									</div>
								</div>
							</div>
						</div>
						<br>					
						<div class="row">
							<div class="col-sm-8">
								<label for="nColonia">Colonia</label>
								<input type="text" id="nColonia" name="nColonia" class="form-control form-control-sm" disabled>
							</div>
							<div class="col-sm-4">
								<label for="nCp">Codigo Postal</label>
								<input type="text" id="nCp" name="nCp" class="form-control form-control-sm" disabled>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">
								<label for="nMunicipio">Municipio</label>
								<input type="text" id="nMunicipio" name="nMunicipio" class="form-control form-control-sm" disabled>
							</div>
							<div class="col-sm-4">
								<label for="nEstado">Estado</label>
								<input type="text" id="nEstado" name="nEstado" class="form-control form-control-sm" disabled>
							</div>
							<div class="col-sm-4">
								<label for="nPais">Pais</label>
								<input type="text" id="nPais" name="nPais" class="form-control form-control-sm" disabled>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-8">
								<label for="nRespon">Responsable </label>
								<input type="text" id="nRespon" name="nRespon" class="form-control form-control-sm" disabled>
							</div>
							<div class="col-sm-4">
								<label for="nMovil">Movil </label>
								<input type="text" id="nMovil" name="nMovil" class="form-control form-control-sm" disabled>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<label for="nMail1">E-mail Principal</label>
								<input type="text" id="nMail1" name="nMail1" class="form-control form-control-sm" disabled>
							</div>
							<div class="col-sm-6">
								<label for="nMail2">RFC</label>
								<input type="text" id="nMail2" name="nMail2" class="form-control form-control-sm" disabled>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<label for="nTel1">Telefono Principal</label>
								<input type="text" id="nTel1" name="nTel1" class="form-control form-control-sm" disabled>
							</div>
							<div class="col-sm-6">
								<label for="nTel2">Telefono Extra</label>
								<input type="text" id="nTel2" name="nTel2" class="form-control form-control-sm" disabled>
							</div>
						</div>
					</div>
				</div>					
			</div>
			</div>
		</div>
</form>