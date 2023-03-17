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
    <h1 class="p-5 text-center uppercase">Usuario Registrado con Exito</h1>
    <?php
        require './Conexion.php';
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $telefono = $_REQUEST['telefono'];
        $correo = $_REQUEST['correo'];

        mysqli_query($db,"INSERT INTO usuarios(nombre,apellido,telefono,correo) VALUES ('$nombre','$apellido','$telefono','$correo')");
    ?>
    <div class="text-center">
        <a class="text-center btn btn-outline-primary" href="../Usuarios.php">Regresar</a>
    </div>
</body>

</html>