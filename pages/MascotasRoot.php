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
    <title>Mascotas</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

    <header class="container-fluid text-center p-5 bg-dark text-light">
        <h1>Nuestra Seccion de Mascotas</h1>
        <hr>
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

    <main>
        <section class="p-5 container-fluid">
            <form action="./include/registroAdopcion.php" method="post">
                <div class="row p-5">
                    <?php
                    if ($band === 1) {

                        require '../include/Conexion.php';
                        $result = mysqli_query($db, "SELECT * FROM mascotas");
                        while ($row = mysqli_fetch_array($result)) {
                            $imagen = $row['imagen'];
                            $nombre = $row['nombre'];
                            $estado = intval($row['estado']);


                            if ($estado == 1) {
                                $estadoBoton = "disabled";
                                $estadoAdopcion = "Adoptado";
                                $colorAdopcion = "text-danger";
                            } else {
                                $estadoBoton = "enabled";
                                $estadoAdopcion = "Disponible para Adopcion";
                                $colorAdopcion = "text-dark";
                            }
                            echo "<div class='col-lg-3 text-center'>
                            <div class='card p-5'>
                                <img class='card-img-top' src='../images/mascotas/$imagen' alt='$imagen'>
                                <div class='card-body'>
                                    <h3 class='card-title text-center text-uppercase p-2 fs-4'>$nombre</h3>
                                    <p class='text-center $colorAdopcion'>$estadoAdopcion</p>
                                </div>
                            </div>
                          </div>";
                        }
                    } else {
                        echo "<div class='text-center'>
                        <h1>No Deberias estar Aqui</h1>
                        <img src='../images/Kommi Meme.webp'>
                        <br>
                        <a class='btn btn-outline-dark text-center btn-lg mt-5' href='./IniciarSesion.php'>Inicia Sesión</a>
                      </div>";
                    }
                    ?>
                </div>
            </form>
            <?php
                if ($band == 1) {
                    echo "<div class='text-center'>
                    <a class='btn btn-outline-dark' href='AgregarMascota.php'>Agregar Mascota</a>
                    <a class='btn btn-outline-dark' href='EliminarMascota.php'>Eliminar Mascota</a>
                  </div>";
                }
                ?>
        </section>
    </main>
</body>

</html>