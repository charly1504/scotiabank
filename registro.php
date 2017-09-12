<?php include "header.php"; ?>
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<h3>Ya tiene tu cuenta?</h3><br>
			<h4>Inicia ahora, dae el primer pazo</h4><br>
			<p>
				Registrate ahora y obten acceso a plataforma que te permitira ver tus estados de<br>
				cuentas, a tus estados de cuenta de tarjetas de creditos y muchas cosas más, <br> 
				es muy facil  solo llena los campos sigueintes y ten el acceso a tu información bancaria.
			</p>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<h3 class="color-rojo">Registro de clientes</h3>
			<form class="registroF bg-c-blanco" action="confirmar-registro.php" method="POST">
				
				<div class="form-group">
					<label for="nombreCliente">Nombre de cliente</label>
					<div class="input-group">
  						<input type="text" class="form-control" id="nombreCliente" placeholder="Nombre" required="" max="50">
      					<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
    				</div>
				</div>

				<div class="form-group">
					<label for="correoCliente">Correo de cliente</label>
					<div class="input-group">
  						<input type="email" class="form-control" id="correoCliente" placeholder="Correo" required="" max="50">
      					<div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    				</div>
				</div>

				<div class="form-group">
					<label for="fechaCliente">Fecha de nacimiento</label>
					<div class="input-group">
  						<input type="text" class="form-control" id="fechaCliente" placeholder="Fecha de nacimiento" required="" max="10">
      					<div class="input-group-addon">dd/mm/aaaa</div>
    				</div>
				</div>
				<div class="text-right">
					<button id="registrarF" class="btn menutop-s">Registrar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>