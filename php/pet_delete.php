
<?php
if (!isset($_GET["id"])) {
    exit("No hay datos");
}
include_once "functions.php";
$id = $_GET["id"];
deletePet($id);
header("Location: /Adoptadog/homeAdmin.php");
