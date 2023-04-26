<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="login.css">
	<style>
		img {
			width: 80%;
			margin-left: 2rem;
		}

		.align-items-center {
			background-size: cover;
			background-position: center;
			height: 100vh;
			background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
				url("https://img.freepik.com/vector-premium/fondo-transparente-hueso-perro-colorido_662353-351.jpg?w=2000");
		}
	</style>

</head>

<body>


	<section class=" text-center text-lg-start">
		<style>
			.rounded-t-5 {
				border-top-left-radius: 0.5rem;
				border-top-right-radius: 0.5rem;
			}

			@media (min-width: 992px) {
				.rounded-tr-lg-0 {
					border-top-right-radius: 0;
				}

				.rounded-bl-lg-5 {
					border-bottom-left-radius: 0.5rem;
				}
			}
		</style>
		<div class="card mb-3">
			<div class="row g-0 d-flex align-items-center">
				<div class="col-lg-4 d-none d-lg-flex">
					<img src="https://w0.peakpx.com/wallpaper/47/741/HD-wallpaper-brown-dog-near-pond-animals-no-people-nobody-vertical.jpg" />
				</div>
				<div class="col-lg-8">
					<div class="card-body py-5 px-md-5">

						<form action="php/conexion.php" method="post">
							<!-- Email input -->
							<div class="form-outline mb-4">
								<input type="email" id="form2Example1" name="email" class="form-control" />
								<label class="form-label" for="form2Example1">Correo Electronico</label>
							</div>

							<!-- Password input -->
							<div class="form-outline mb-4">
								<input type="password" id="form2Example2" name="password" class="form-control" />
								<label class="form-label" for="form2Example2">Password

								</label>
							</div>

							<!-- 2 column grid layout for inline styling -->
							<div class="row mb-4">


								<div class="col">
									<!-- Simple link -->
									<a class="createUsu" href="php/createUser.php">Crea un Usuario</a>
								</div>
							</div>

							<!-- Submit button -->
							<button type="submit" class="btn btn-primary btn-block mb-4">Iniciar</button>

						</form>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Section: Design Block -->

</body>

</html>