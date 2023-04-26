
<?php
include_once "functions.php";
$pet = getPets();
if (
	!isset($_POST["name"])  || !isset($_POST["description"])
	|| !isset($_POST["image"]) || !isset($_POST["precio"])
	|| !isset($_POST["cantidad"])
) {
	exit("Error: se requieren todos los datos para guardar la Mascota.");
}
include_once "functions.php";
$name = $_POST["name"];
$description = $_POST["description"];
$image = $_POST["image"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];

$resultado = savePet($name, $description, $image, $precio,  $cantidad);

if ($resultado === false) {
	exit("Error: no se pudo guardar la Mascota.");
}
header("Location: /Adoptadog/homeAdmin.php ?>");
