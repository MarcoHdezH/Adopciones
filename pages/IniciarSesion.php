<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <header class="container-fluid text-center p-5 bg-dark text-light">
        <h1>Refugio de Animales Fedora's</h1>
    </header>
    <form class="text-center container-fluid p-5" action="../include/inicioSesion.php" method="POST">
        <legend class="text-uppercase">Iniciar Sesión</legend>
        <label class="form-label mt-3">Nombre de Usuario: <input class="form-control" type="text" name="usuario" required></label>
        <br>
        <label class="form-label mt-3">Contraseña: <input class="form-control" type="password" name="contraseña" required></label>
        <br>
        <input class="mt-3 btn btn-outline-dark" type="submit" value="Iniciar Sesión">
    </form>
    <div class="text-center">
        <a class="btn btn-outline-dark" href="./RegistrarUsuario.php">¿No tienes un usuario? ¡Registrate hoy Mismo!</a>
    </div>

</body>

</html>