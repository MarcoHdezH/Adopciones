<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">

</head>

<body>
    <header class="container-fluid text-center p-5 bg-primary text-light">
        <h1>Sección de Usuarios</h1>
        <hr>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="Usuarios.php">Usuarios</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="RegistrarUsuario.php">Crear Usuario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="BorrarUsuario.php">Borrar Usuario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Regresar</a>
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
            <form action="./include/ReporteUsuario.php" method="post">
                <div class="row p-5">
                    <?php
                    require './include/Conexion.php';
                    $result = mysqli_query($db, "SELECT * FROM usuarios");
                    while ($row = mysqli_fetch_array($result)) {
                        $ID = $row['id'];
                        $apellido = $row['apellido'];
                        $nombre = $row['nombre'];

                        $aux = mysqli_query($db, "SELECT * FROM adopciones WHERE usuarioID=$ID");

                        echo "<div class='col-lg-3 text-center'>
                            <div class='card p-1'>
                                <div class='card-body'>
                                    <h3 class='card-title text-center text-uppercase p-2 fs-4'>$nombre $apellido</h3>
                                </div>
                                <button class='text-center btn btn-outline-primary' type='submit' name='Usuario' value='$nombre'>Ver Reporte</button>
                            </div>
                          </div>";
                    }

                    ?>
                </div>
            </form>
        </section>
    </main>
</body>

</html>