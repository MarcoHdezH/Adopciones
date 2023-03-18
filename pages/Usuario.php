<?php
session_start();
$band = 0;
if (isset($_SESSION['datos']['Usuario'])) {
    $usuario = $_SESSION['datos']['Usuario'];
    $contraseña = $_SESSION['datos']['Contraseña'];
    $nombre = $_SESSION['datos']['Nombre'];
    $apellido = $_SESSION['datos']['Apellido'];
    $correo = $_SESSION['datos']['Correo'];
    $telefono = $_SESSION['datos']['Telefono'];
    $imagen = $_SESSION['datos']['Imagen'];
    $band = 1;
} else {
    $usuario = "Undefinded";
    $band = 0;
}
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
        <h1>Bienvenido a tu Perfil: <?php echo $usuario ?></h1>
        <hr>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">Inicio</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="MascotasUsuario.php">Mascotas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="Usuario.php">Mi Perfil (<?php echo $usuario ?>)</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="CerrarSesion.php">Cerrar Sesión</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <?php
    if ($band === 1) { ?>
        <div class="row m-0">
            <div class=" text-center col-lg-6">
                <h2 class="p-5">Foto de Perfil</h2>
                <img src="../images/users/<?php echo $imagen ?>">
            </div>
            <div class="col-lg-6 text-center">
                <h2 class="p-5">Datos de Usuario</h2>
                <h4>Nombre(s):</h4>
                <P><?php echo $nombre ?></P>
                
                <h4>Apellido(s):</h4>
                <P><?php echo $apellido ?></P>
                
                <h4>Nombre de Usuario:</h4>
                <P><?php echo $usuario ?></P>

                <h4>Contraseña:</h4>
                <P><?php echo $contraseña ?></P>

                <h4>Telefono:</h4>
                <P><?php echo $telefono ?></P>
                
                <h4>Correo Electronico:</h4>
                <P><?php echo $correo ?></P>
            </div>
        </div>
        </div>
    <?php } else { ?>
        <h1>Que hace aqui papu</h1>;
    <?php } ?>
</body>

</html>