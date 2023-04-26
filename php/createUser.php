<!DOCTYPE html>
<html>

<head>
    <title>Registro de usuario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Registro de usuario</h1>
        <form action="createUser.php" method="POST">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
                <label for="nombre">Nombre de usuario</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                <label for="email">Correo electrónico</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                <label for="password">Contraseña</label>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" name="registro" class="btn btn-primary">Registrarse</button>
            </div>
        </form>
    </div>
</body>

</html>


<?php
if (
    !isset($_POST["nombre"])  || !isset($_POST["email"])
    || !isset($_POST["password"])
) {
    exit("Se requieren todos los datos para guardar el Usuario.");
}
include_once "functions.php";
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["password"];

$resultado = saveUsuario($nombre, $email, $password);

if ($resultado === false) {
    exit("Error: no se pudo guardar el usuario.");
}
header("Location: /Adoptadog/login.php");
