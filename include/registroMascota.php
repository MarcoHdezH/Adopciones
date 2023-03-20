<?php
session_start();
if (isset($_SESSION['datos']['Usuario'])) {
    $band = 1;
} else {
    $band = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <h1 class="p-5 text-center uppercase bg-dark text-light">Mascota Registrada con Exito</h1>
    <?php
    if ($band === 1) {
        require './Conexion.php';
        $nombre = $_REQUEST['nombre'];
        $especie = $_REQUEST['especie'];
        $descripcion = $_REQUEST['descripcion'];
        $imagen = $_FILES['imagen']['name'];

        mysqli_query($db, "INSERT INTO mascotas(nombre,especie,imagen,descripcion,estado) VALUES ('$nombre','$especie','$imagen','$descripcion',0)");
        echo "<div class='text-center'>
        <a class='text-center p-2 btn btn-outline-dark' href='../pages/MascotasRoot.php'>Regresar</a>
    </div>";
    } else { ?>
        <div class='text-center'>
            <h1>No Deberias estar Aqui</h1>
            <img src='../images/Kommi Meme.webp'>
            <br>
            <a class='btn btn-outline-dark text-center btn-lg mt-5' href='./IniciarSesion.php'>Inicia Sesión</a>
        </div>

    <?php } ?>
</body>

</html>