<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "adoptadog");

// Verificar si el formulario ha sido enviado
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar si el correo electrónico y la contraseña son correctos
    $sql = "SELECT * FROM usu WHERE email='$email' AND password='$password'";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) == 1) {
        // Iniciar sesión y redireccionar al usuario
        session_start();
        $_SESSION['email'] = $email;
        header("Location: /Adoptadog/homeAdmin.php");
    } else {
        echo "Correo electrónico o contraseña incorrectos";
        echo "<a href='/Adoptadog/login.php'>-volver</a>";
    }
}
