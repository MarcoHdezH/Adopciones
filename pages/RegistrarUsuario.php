<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Usuario</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>
    <header class="container-fluid text-center p-5 bg-dark text-light">
        <h1>Refugio de Animales Fedora's</h1>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">Inicio</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="Mascotas.php">Mascotas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="IniciarSesion.php">Iniciar Sesión</a>
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

    <form class="text-center container-fluid" action="../include/registroUsuario.php" method="POST" enctype="multipart/form-data">
        <legend>Completa todos los Campos</legend>
        <label class="form-label mt-3">Nombre(s): <input class="form-control" type="text" name="nombre" placeholder="Nombre de Ejemplo" required></label>
        <br>
        <label class="form-label mt-3">Apellido: <input class="form-control" type="text" name="apellido" placeholder="Contraseña de Ejemplo" required></label>
        <br>
        <label class="form-label mt-3">Teléfono: <input class="form-control" type="tel" name="telefono" placeholder="John Connor" required></label>
        <br>
        <label class="form-label mt-3">correo: <input class="form-control" type="email" name="correo" placeholder="example@hotmail.com" required></label>
        <br>
        <label class="form-label mt-3">Nombre de Usuario: <input class="form-control" type="text" name="usuario" placeholder="" required></label>
        <br>
        <label class="form-label mt-3">Contraseña: <input class="form-control" type="password" name="contraseña" placeholder="" required></label>
        <br>
        <label class="form-label mt-3">Imagen de Usuario: <input class="form-control" type="file" name="imagen" required></label>
        <br>
        <input class="mt-3 btn btn-lg btn-outline-dark" type="submit" value="Registrar Usuario">
    </form>
</body>

</html>