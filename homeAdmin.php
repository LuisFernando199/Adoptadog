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
            <button class="newDog-button"><a class="newDog-navbar" href="http://localhost/Adoptadog/home.php">Cerrar sesion</a></button>
        </div>
    </div>
    <!--Ventana Modal nuevos perros-->
    <div class="ventanaModalNew" id="ventanaModalNew"><br>

        <h1 style="text-align: center;">Añade un perro</h1>
        <div class="content-newModal">

            <button id="ancla" class="newDog-button"><a class="newDog-navbar" href="./php/newDog.php">Añadir perro</a></button>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pets as $pet) { ?>
                        <tr>
                            <td id="pet-id"><?php echo $pet->id ?></td>
                            <td id="pet-name"><?php echo $pet->name ?></td>
                            <td id="pet-description"><?php echo $pet->description ?></td>
                            <td><img id="pet-img" src="<?php echo $pet->image ?>" style="max-width: 100px;"></td>
                            <td id="pet-price"><?php echo $pet->precio ?></td>
                            <td id="pet-quantity"><?php echo $pet->cantidad ?></td>
                            <td>
                                <button class="anadir" onclick="setDogs()">Añadir</button>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="php/pet_delete.php?id=<?php echo $pet->id ?>">
                                    <i class="fa fa-trash"></i> Eliminar
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <?php
        ?>
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