<script type="text/javascript">

	(function($){ 
	  	$(document).ready(function(){
			$("#form2").hide();
			$("#form3").hide();
			$("#form4").hide();
		});
	})(jQuery);
	
</script>


<section>
	<div class="alert alert-danger alert-dissmisable" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<span class="glyphicon glyphicon-exclamation-sign"></span>
		<strong>IMPORTANTE. </strong>El usuario que administrará esta elección ha de ser creado antes de continuar.
	</div>
</section>

<section id="form1">
	<h2>Crear Elecci&oacute;n </h2>
		<div class="row">
			<form method="post"
				  name="formEleccion"
				  id="formEleccion"
				  role="form"
				  target="_self">
				<div class="col-md-6">
					<div id="tipo" name="tipo" class="form-group">
						<label for="tipoEleccion">Tipo de la Eleccion</label>
						<select name="tipoEleccion" id="tipoEleccion" class="form-control" value="" required>
			                <option selected value="-1"> - - - - - - - - </option>
							<?php
								$query = "SELECT * FROM ubuMaestraTipoEleccion";
								$query = htmlentities($query);
								$result = db_query($query);
								foreach ($result as $row) {
									echo '<option value="'.$row->idMaestraTipoEleccion.'">'.$row->nombreEleccion.'</option>';
								}
							?>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div id="eleccion"  name="eleccion" class="form-group">
						<label for="nombreEleccion">Nombre de la Eleccion</label>
						<input type="text" id="nombreEleccion" name="nombreEleccion" class="form-control" placeholder="nombre de la eleccion" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div id="cargos"  name="cargos" class="form-group">
						<label for="cargosElectos">Número de cargos Electos</label>
						<input type="number" min="0" id="cargosElectos" name="cargosElectos" class="form-control" placeholder="cargos electos" required>
					</div>
				</div>
				<div class="col-md-6">
			        <div id="anno" id="fecha" name="fecha" class="form-group">
						<label for="fechaEleccion">Fecha (d/m/a)</label>
						<input type="date" id="fechaEleccion" name="fechaEleccion" class="form-control" placeholder="año de la eleccion" required>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-md-6">
					<div id="usuario" name="usuario" class="form-group">
						<label for="usuarioEleccion">Administrador de la elección</label>
						<select name="usuarioEleccion" id="usuarioEleccion" class="form-control" value="" required>
			                <option selected> - - - - - - - - </option>
							<?php
								$query = "SELECT uid, name FROM users";
								$query = htmlentities($query);
								$result = db_query($query);
								foreach ($result as $row) {
									echo '<option value="'.$row->uid.'">'.$row->name.'</option>';
								}
							?>
						</select>
					</div>
				</div>
				<div class="col-md-6">
			        <div>
			        	<input type="submit" id="envio" class="btn btn-default" value="Generar Eleccion">
			        </div>
		    	</div>
			</form>
		</div>
</section>
<section id="form2">
	<h2>Crear Distrito </h2>
		<div class="row">
			<form method="post"
				  name="formDistritos"
				  id="formDistritos"
				  role="form"
				  target="_self">
				<div class="col-md-6">
					<div name="distrito" id="distrito" class="form-group">
						<label for="nombreDistrito"> Nombre del Distrito</label>
						<input type="text" name="nombreDistrito" id="nombreDistrito" class="form-control" placeholder="Nombre">
					</div>
				</div>
				<div class="col-md-6">
					<div name="numMesas" id="mesas" class="form-group">
						<label for="numeroMesas"> Número de Mesas </label>
						<input type="number" name="numeroMesas" id="numeroMesas" class="form-control" placeholder="Mesas">
					</div>
				</div>
				<div class="col-md-6">
					<div name="" id="" class="form-group">
						<input type="submit" name="enviar" id="enviar" class="btn btn-default" value="Crear Distrito">
					</div>
				</div>
			</form>
		</div>
		
</section>
<section id="form3">
	<h2>Crear Mesas </h2>
			<form method="post"
				  name="formMesas"
				  id="formMesas">
				  <div class="col-md-12">
				  	<div class="row">
				  		<div name="mostrarMesas" id="mostrarMesas"></div>
				  	</div>
				  </div>
				  <div class="row">
					  <div class="col-md-6">
						<input type="submit" id="enviar" class="btn btn-default" value="Actualizar Votantes">
					  </div>
				 </div>
			</form>
		</div>
</section>
<section id="form4">
	<h2>Crear Partidos </h2>
		<form method="post" role="form" id="formPartidos" name="formPartidos">
			<div class="row">
				<div class="col-md-6">
					<div id="nombre"  name="nombre" class="form-group">
						<label for="nombrePartido">Nombre del Partido</label>
						<input type="text" id="nombrePartido" name="nombrePartido" class="form-control" placeholder="Nombre del partido" required>
					</div>
					<div id="siglas"  name="siglas" class="form-group">
						<label for="siglasPartido">Siglas del Partido</label>
						<input type="text" id="siglasPartido" name="siglasPartido" class="form-control" placeholder="SIGLAS" required>
					</div>
					<div id="color"  name="color" class="form-group">
						<label for="colorPartido">Color del Partido</label>
						<input type="color" id="colorPartido" name="colorPartido" class="form-control" placeholder="Color" required>
					</div>
				</div>
				<div class="col-md-6 alert alert-success" id="successPartido" >
					No existen partidos para esta elección.
				</div>
			</div>
			
			<div class="col-md-2">
				 <input type="submit" id="enviar" name="enviar" class="btn btn-default" value="Guardar" >
			</div>
		</form>
		<input type="button" id="finalizarEleccion" name="finalizarEleccion" class="btn btn-default" value="Finalizar">
</section>