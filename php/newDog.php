<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	<style>
		img {
			width: 80%;
			margin-left: 2rem;
		}

		.align-items-center {
			background: rgb(34, 221, 251);
			background: linear-gradient(90deg, rgba(34, 221, 251, 1) 0%, rgba(22, 255, 91, 1) 35%, rgba(228, 255, 0, 1) 100%);
		}

		body {
			background: rgb(34, 221, 251);
			background: linear-gradient(90deg, rgba(34, 221, 251, 0.5) 0%, rgba(22, 255, 91, 0.5) 35%, rgba(228, 255, 0, 0.5) 100%);
		}
	</style>

</head>

<body>

	<!--Formulario-->
	<div class="container">
		<form id="myForm" action="createDog.php" method="post">
			<div class="form-group">
				<label for="name">Nombre:</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Nombre raza">
			</div>
			<div class="form-group">
				<label for="description">Descripción:</label>
				<textarea class="form-control" id="description" name="description"></textarea>
			</div>
			<div class="form-group">
				<label for="image">Imagen URL:</label>
				<input type="text" class="form-control" id="image" name="image" placeholder="Agrega URL...">
			</div>
			<input type="hidden" id="precio" name="precio" value=250>
			<input type="hidden" id="cantidad" name="cantidad" value=1>
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>


</body>

</html>