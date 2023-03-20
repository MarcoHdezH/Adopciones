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
        <h1>Sección de Usuarios</h1>
        <hr>
    </header>

    <main>
        <section class="p-5 container-fluid">
            <form action="../include/ReporteUsuario.php" method="post">
                <div class="row p-5">
                    <?php
                    require '../include/Conexion.php';
                    $result = mysqli_query($db, "SELECT * FROM usuarios");
                    while ($row = mysqli_fetch_array($result)) {
                        $ID = $row['id'];
                        $apellido = $row['apellido'];
                        $nombre = $row['nombre'];
                        $usuario = $row['usuario'];

                        if ($usuario != "LinceMistico01") {
                            $aux = mysqli_query($db, "SELECT * FROM adopciones WHERE usuarioID=$ID");

                            echo "<div class='col-lg-3 text-center'>
                            <div class='card p-1'>
                                <div class='card-body'>
                                    <h3 class='card-title text-center text-uppercase p-2 fs-4'>$nombre $apellido</h3>
                                    <p class='text-center'>No. de Acopciones: $aux->num_rows</p>
                                </div>
                            </div>
                          </div>";
                        }
                    }
                    ?>
                </div>
            </form>
        </section>
    </main>
</body>

</html>