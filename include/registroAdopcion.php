<?php
session_start();
$band = 0;
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
    <title>Adopcion Mascotas</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <header class="p-5 container-fluid bg-dark">
        <h1 class="text-center text-light">¡Gracias Por Adoptar!</h1>
    </header>
    <?php

    if ($band === 1) {
        require './Conexion.php';

        $mascota = $_REQUEST['Mascota'];

        mysqli_query($db, "UPDATE mascotas SET estado=1 WHERE nombre='$mascota'");
        $rowU = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM usuarios WHERE usuario='$usuario' "));
        $rowM = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM mascotas WHERE nombre='$mascota' "));
        $idU = $rowU['id'];
        $idM = $rowM['id'];

        mysqli_query($db, "INSERT INTO adopciones (mascotaID,usuarioID,fecha) VALUES ('$idM','$idU',CURDATE())");

        echo "<div class='text-center'>";
        $result = mysqli_query($db, "SELECT * FROM mascotas WHERE nombre='$mascota'");
        while ($row = mysqli_fetch_array($result)) {
            $imagen = $row['imagen'];
            $nombre = $row['nombre'];
            $estado = intval($row['estado']);

            echo "<div class='card p-5'>
                    <div class='text-center'>
                        <img class='card-img-top w-25 text-center' src='../images/mascotas/$imagen' alt='$imagen'>
                    </div>
                    
                    <div class='card-body'>
                        <h3 class='card-title text-center text-uppercase p-2 fs-4'>$mascota</h3>
                        <p class='text-center'>¡Cuida bien a tu nuevo Amigo!</p>
                    </div>
             </div>";
        }
        echo "</div>";

        echo "<div class='text-center p-5' ><a href='../index.php' class='btn btn-dark btn-lg '> Regresar </a></div>";
    } else {
        echo "<div class='text-center'>
                <h1>No Deberias estar Aqui</h1>
                <img src='../images/Kommi Meme.webp'>
                <br>
                <a class='btn btn-outline-dark text-center btn-lg mt-5' href='../pages/IniciarSesion.php'>Inicia Sesión</a>
              </div>";
    }

    ?>

</body>

</html>