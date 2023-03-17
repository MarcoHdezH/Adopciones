<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Usuario</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">

</head>

<body>
    <h1 class="text-center uppercase p-5 bg-primary text-light"> Registrar Usuario </h1>

    <form class="text-center container-fluid" action="./include/registroUsuario.php" method="POST">
        <legend>Completa todos los Campos</legend>
        <label class="form-label mt-3">Nombre(s): <input class="form-control" type="text" name="nombre" placeholder="Nombre de Ejemplo" required></label>
        <br>
        <label class="form-label mt-3">Apellido: <input class="form-control" type="text" name="apellido" placeholder="Contraseña de Ejemplo" required></label>
        <br>
        <label class="form-label mt-3">Teléfono: <input class="form-control" type="tel" name="telefono" placeholder="John Connor" required></label>
        <br>
        <label class="form-label mt-3">correo: <input class="form-control" type="email" name="correo" placeholder="example@hotmail.com" required></label>
        <br>
        <input class="mt-3 btn btn-lg btn-outline-dark" type="submit" value="Registrar Usuario">
    </form>
</body>

</html>