<?php
session_start();
if (isset($_SESSION['datos']['Usuario'])) {
    $usuario = $_SESSION['datos']['Usuario'];
    $band = 1;
} else {
    $usuario = "No ha iniciado Sesión";
    $band = 0;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Usuario</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>
    <header class="container-fluid text-center p-5 bg-dark text-light">
        <h1>Refugio de Animales Fedora's</h1>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">Inicio</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link disabled" href="MascotasRoot.php">Seccion de Mascotas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="UsuariosRoot.php">Seccion de Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="UsuarioRoot.php">Bienvenido (<?php echo $usuario ?>)</a>
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
        <form class="text-center container-fluid" action="../include/registroMascota.php" method="POST" enctype="multipart/form-data">
            <legend>Completa todos los Campos</legend>
            <label class="form-label mt-3">Nombre de la Mascota: <input class="form-control" type="text" name="nombre" required></label>
            <br>
            <label class="form-label mt-3">Especie: <input class="form-control" type="text" name="especie" required></label>
            <br>
            <label class="form-label mt-3">Descripcion: <input class="form-control" type="tel" name="descripcion" required></label>
            <br>
            <label class="form-label mt-3">Imagen de Usuario: <input class="form-control" type="file" name="imagen" required></label>
            <br>
            <input class="mt-3 btn btn-lg btn-outline-dark" type="submit" value="Registrar Usuario">
        </form>
    <?php } else { ?>
        <div class='text-center'>
            <h1>No Deberias estar Aqui</h1>
            <img src='../images/Kommi Meme.webp'>
            <br>
            <a class='btn btn-outline-dark text-center btn-lg mt-5' href='./IniciarSesion.php'>Inicia Sesión</a>
        </div>
    <?php } ?>
</body>

</html>