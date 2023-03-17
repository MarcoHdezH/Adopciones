<?php
session_start();
$usuario = $_SESSION['datos']['Usuario'];
$contraseña = $_SESSION['datos']['Contraseña'];
$nombre = $_SESSION['datos']['Nombre'];
$apellido = $_SESSION['datos']['Apellido'];
$correo = $_SESSION['datos']['Correo'];
$telefono = $_SESSION['datos']['Telefono'];
$imagen = $_SESSION['datos']['Imagen'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>
    <header class="container-fluid text-center p-5 bg-dark text-light">
        <h1>Bienvenido a tu Perfil: <?php echo $usuario?></h1>
    </header>
    <?php
    echo"$usuario<br>";
    echo"$contraseña<br>";
    echo"$nombre<br>";
    echo"$apellido<br>";
    echo"$correo<br>";
    echo"$imagen<br>";
    echo"$telefono<br>";
    ?>
</body>
</html>