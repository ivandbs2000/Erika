<?php 
	include("conexion_bd.php")
?>

<!DOCTYPE html>
<html>
<head>
	<title>TodoRevistas!</title>
	<meta charset="utf-8">

	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
	<div class="row" style="background-color: #DB3434; height: 110px">
		<div class="col-md-2" style="background-color: white; border-bottom-right-radius: 100%">
			<img src="srcs/logo.png" style="height: 70%; width: 40%; margin-left: 2em	">
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-6">
			<ul class="nav">
			  <li class="nav-item">
			    <a class="nav-link active" href="#"><br><h3 style="color: white">Inicio</h3></a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#"><br><h3 style="color: white; margin-left: 4em">Tematicas</h3></a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#"><br><h3 style="color: white; margin-left: 4em">Contacto</h3></a>
			  </li>
			</ul>
		</div>
		
		<div class="col-md-3">
			<p></p>
			<img src="srcs/icon_ubicacion_b.png" style="width: 50px; height: 50px">
			<img src="srcs/icon_facebook_b.png" style="width: 50px; height: 50px; margin-left: 1em">
			<img src="srcs/icon_linkeid_b.png" style="width: 50px; height: 50px; margin-left: 1em">
		</div>
		<div style="height: 100px"></div>
	</div>

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<h1 style="margin-top: 3em; font-size: 60px"><b>Suscribete a tus revistas favoritas por tan solo $29.000 al mes</b></h1>
			<p><br>Para que no te pierdas ningun detalle de los mejores contenidos!.</p>
		</div>
		<div class="col-md-7">
			<img src="srcs/social_media.png" style="height: 100%; width: 70%">
		</div>
	</div>

	<div></div>
	<div class="row" style="background-color: #DB3434;">
		<div class="col-md-3"></div>
		<div class="col-md-9">
			<h5><b style="color: white">Podrás leer tus revistas desde cualquier lugar, en cualquier dispositivo!</b></h5>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6" style="margin-top: 7em">
				<form method="GET" onsubmit="searchTupla(); return false;">
					<div class="form-group">
						<h3><b>Conoce si te encuentras registrado en nuestro sistema!</b></h3><br>

						<input type="number" class="form-control" placeholder="Numero de Identificacion" name="search_id" id="search_id" style="background-color: lightgray; background-image: url('srcs/icon_buscar.png'); background-position: 0px 0px; background-repeat: no-repeat; padding-left: 50px; background-size: 40px 40px; width: 500px" onkeypress="return checkIDLen(this);">
						
						<button type="submit" class="btn btn-danger" style="margin-top: 10px; margin-left: 180px; border-radius: 20px; width: 30%">Buscar</button>
					</div>
				</form>
				<p style="margin-top: 4em;font-size: 30px; text-align: center"><b>Suscribirme a una revista</b></p>

				<input type="number" class="form-control" placeholder="Numero de Identificacion" name="suscribe" id="suscribe" style="background-color: lightgray; background-image: url('srcs/icon_identificacion.png'); background-position: 0px 0px; background-repeat: no-repeat; padding-left: 50px; background-size: 40px 40px; width: 500px;" onkeypress="return checkIDLen(this);">

				<select class="form-control" id="magazine" style="background-color: lightgray; background-image: url('srcs/icon_revista.png'); background-position: 0px 0px; background-repeat: no-repeat; padding-left: 50px; background-size: 40px 40px; margin-top: 2em; width: 500px">
					<option>Seleccionar una revista</option>
					<?php 
								while($valores = mysqli_fetch_array($query2))
								{
									echo '<option value="'.$valores['id_revista'].'">'.$valores['nombre_revista'].'</option>';
								}
							?>
				</select>
				
				<button type="submit" class="btn btn-danger" style="margin-top: 10px; margin-left: 180px; border-radius: 20px; width: 30%">Suscribirme</button>
			</div>
			<div class="col-md-6">
				<img src="srcs/bombillo.png" style="margin-left: 8em; height: 40%; width: 50%">
				<span><p id="status" style="text-align: center; font-size: 25px"><b>Conoce si estas registrado en el sistema!</b></p></span>

				<h2 style="margin-top: 2em; text-align: center;"><b id="status2">Registrate en nuestro sistema</b></h2>
				<p style="text-align: center; font-size: 15px;">Aplica para usuarios que no se han registrado previamente</p>
				
				<form method="POST" onsubmit="insertUser(); return false;">
					<div class="row">
						<div class="col-md-6">
							<input type="number" class="form-control" placeholder="Numero de Identificacion" name="id_reg" id="id_reg" style="background-color: lightgray; text-align: center; border-radius: 10%" onkeypress="return checkIDLen(this);">

							<input type="text" class="form-control" placeholder="Apellido" name="last_name" id="last_name" style="background-color: lightgray; border-radius: 10%; text-align: center; margin-top: 2em">

							<input type="number" class="form-control" placeholder="Edad" name="age" id="age" style="background-color: lightgray; border-radius: 10%; text-align: center; margin-top: 2em" onkeypress="return checkAge(this);">
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Nombre" name="name" id="name" style="background-color: lightgray; border-radius: 10%; text-align: center">

							<input type="email" class="form-control" placeholder="Correo electronico" name="email" id="email" style="background-color: lightgray; border-radius: 10%; text-align: center; margin-top: 2em">

							<select class="form-control" id="city" style="background-color: lightgray; margin-top: 2em; margin-top: 2em">
								
								<option>Seleccionar una ciudad</option>
								<?php 
									while($valores = mysqli_fetch_array($query))
									{
										echo '<option value="'.$valores['cod_ciudad'].'">'.$valores['nombre_ciudad'].'</option>';
									}
								?>
							</select>
						</div>
					</div>
					<div class="row" style="margin-top: 1em">
						<div class="col-md-8">
							<p style="font-size: 18px">Al hacer click en "Registrarme" estoy aceptando los terminos y condiciones, politica de datos y cookies</p>
						</div>
						<div class="col-md-4">
							<button type="submit" class="btn btn-danger" style="margin-top: 10px; border-radius: 20px; width: 80%">Registrarme</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-5" style="background-color: #DB3434; height: 200px; border-top-right-radius: 100%">
			<p style="color: white; font-size: 25px; margin-top: 3em; margin-left: 2em"><b>TodoRevistas, tienda online©</b></p>
			<p style="color: white; font-size: 15px; margin-left: 7em">Todos los derechos reservados</p>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-6" style="margin-top: 10em">
			<label>Aliados:</label>
			<img src="srcs/cromos.png" style="height: 60%; width: 10%; margin-left: 1em">
			<img src="srcs/fucsia.png" style="height: 60%; width: 10%; margin-left: 1em">
			<img src="srcs/jetset.png" style="height: 60%; width: 10%; margin-left: 1em">
			<img src="srcs/dinero.png" style="height: 60%; width: 10%; margin-left: 1em">
			<img src="srcs/semana.png" style="height: 60%; width: 10%; margin-left: 1em">
		</div>
	</div>

	<script type="text/javascript" src="subject_db.js"></script>
</body>
</html>