<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopcion Mascotas</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/app.css">

</head>

<body>
    <header class="p-5 container-fluid">
        <h1>Hola</h1>
    </header>
    <?php
    require './include/Conexion.php';

    $usuario = $_REQUEST['Usuario'];
    $mascota = $_REQUEST['Mascota'];
    echo "$usuario";
    echo "$mascota";

    mysqli_query($db, "UPDATE mascotas SET estado=1 WHERE nombre='$mascota'");

    ?>

</body>

</html>