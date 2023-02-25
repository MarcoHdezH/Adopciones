<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascotas</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/app.css">

</head>

<body>

    <header class="container-fluid text-center p-5 bg-primary text-light">
        <h1>Nuestra Seccion de Mascotas</h1>
        <hr>
    </header>

    <main>
        <section class="p-5 container-fluid">
            <form action="registroAdopcion.php" method="post">
                <div class="row p-5">
                    <?php

                    require './include/Conexion.php';
                    $result = mysqli_query($db, "SELECT * FROM mascotas");
                    while ($row = mysqli_fetch_array($result)) {
                        $imagen = $row['imagen'];
                        $nombre = $row['nombre'];
                        $especie = $row['especie'];
                        $estado = intval($row['estado']);


                        if ($estado == 1) {
                            $estadoBoton = "disabled";
                            $estadoAdopcion = "No Disponible";
                        } else {
                            $estadoBoton = "enabled";
                            $estadoAdopcion = "Disponible :3";
                        }
                        echo "<div class='col-lg-3 text-center'>
                            <div class='card p-5'>
                                <img class='card-img-top' src='./images/$imagen' alt='$imagen'>
                                <div class='card-body'>
                                    <h3 class='card-title text-center text-uppercase p-2 fs-4'>$nombre</h3>
                                    <p class='text-center'>$estadoAdopcion</p>
                                </div>
                                <input class='text-center btn $estadoBoton' type='radio' name='Mascota' value='$nombre'>
                            </div>
                          </div>";
                    }
                    ?>
                </div>

                <div class="container-fluid">
                    <?php
                    require './include/Conexion.php';
                
                    $result = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM mascotas WHERE nombre='$mascota'"));
                    $mascotaid = $result['id'];

                    echo "<h4 class='text-center'>Lista de Adoptantes. Selecciona tu Nombre</h4>";
                
                    echo "<select class='form-select form-select-lg mb-3 text-center' name='Usuario' required>";
                    $usuarios = mysqli_query($db, "SELECT * FROM usuarios");
                    while ($row = mysqli_fetch_array($usuarios)) {
                        $id=$row['id'];
                        $contador=mysqli_query($db, "SELECT * FROM adopciones WHERE usuarioID=$id");
                        if($contador->num_rows!=2){
                            $nombre = $row['nombre'];
                            echo "<option>$nombre</option>";
                        }
                    }
                    echo "</select>";
                    ?>
                </div>

                <div class="text-center containter-fluid">
                    <input type="submit" class="btn btn-outline-primary text-center btn-lg" value="Confirmar Adopcion">
                </div>
            </form>
        </section>
    </main>

</body>

</html>