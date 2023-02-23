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
            <div class="row p-5">
                <?php

                require './include/Conexion.php';
                $result = mysqli_query($db, "SELECT * FROM mascotas");
                while ($row = mysqli_fetch_array($result)) {
                    $imagen = $row['imagen'];
                    $nombre = $row['nombre'];
                    $especie = $row['especie'];
                    $estado = intval($row['estado']);


                    if($estado==1){
                        $estadoBoton="disabled";
                    }else{
                        $estadoBoton="enabled";
                    }
                    
                    echo "<div class='col-lg-3 text-center'>
                            <div class='card p-5'>
                                <img class='card-img-top' src='./images/$imagen' alt='$imagen'>
                                <div class='card-body'>
                                    <h3 class='card-title text-center text-uppercase p-2 fs-4'>$nombre</h3>
                                    <p class='text-center'>$especie</p>
                                </div>
                                <a href='https://github.com/MarcoHdezH/Ecommerce-Alone_Bannete.git' class='text-center btn btn-outline-dark fs-2 $estadoBoton'>Adoptar</a>
                            </div>
                          </div>";
                }

                ?>
            </div>
        </section>
    </main>

</body>

</html>