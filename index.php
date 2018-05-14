<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="subido.php">
		<div class="form-group">
			<label >Nombre</label>
			<input type="text" value="nombre" name="nombre" class="form-control" placeholder="nombre">
		</div>
		<div class="form-group">
			<label >Plataforma:</label>
			<select class="form-control" name="plataforma">
				<option value="xbox-360">X-Box 360</option>
				<option value="pc">PC</option>
			</select>
		</div>
		<div class="form-group">
		<label >Genero:</label>
			<select class="form-control" name="genero">
				<option value="accion">Accion</option>
				<option value="aventuras">Aventuras</option>
				<option value="rol">Rol</option>
				<option value="lucha">Lucha</option>
			</select>
		</div>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
</body>
</html>