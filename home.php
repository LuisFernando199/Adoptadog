<?php
include_once "php/functions.php";
$pets = getPets();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <title>Adoptadogs</title>
</head>

<body>
  <!--nadBar-->
  <div class="nav-container">
    <nav class="navbar">
      <h1 class="logo-navbar"><a href="/Adoptadog/home.php">Adoptadogs</a> </h1>
      <h2 class="carrito-navbar" id="carritoNavbar"><img src="./assets/iconPet.svg"><span class="amountCart" id="amountCart"></span></h2>
    </nav>
  </div>
  <!--fondo-->
  <div class="fondo">
    <div class="fondo-container">

      <h1>Nuestros Perritos</h1>
      <p>Elige tu perrito favorito.</p>
      <button class="newDog-button"><a class="newDog-navbar" href="http://localhost/Adoptadog/login.php">Login Admin</a></button>
    </div>
  </div>
  <!--Container-->
  <div class="contenedor" id="contenedor"></div>

  <!--Ventana Modal-->
  <div class="ventanaModal" id="ventanaModal"></div>


  <script src="./js/objDogs.js"></script>
  <script src="./js/app.js"></script>
  <script src="./js/cart.js"></script>
  <script src="./js/funtions.js"></script>
  <script src="./js/localStorage.js"></script>
</body>

</html>