<?php
$usuario = $_SESSION['datos']['Usuario'];
?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Inicio</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="./pages/MascotasRoot.php">Seccion de Mascotas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./pages/UsuariosRoot.php">Seccion de Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./pages/UsuarioRoot.php">Bienvenido (<?php echo $usuario?>)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./pages/CerrarSesion.php">Cerrar Sesión</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>