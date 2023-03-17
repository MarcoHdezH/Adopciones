<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Encuentra a tu Mascota Ideal</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">

</head>

<body>
  <header class="container-fluid text-center p-5 bg-primary text-light">
    <h1>Adopción Responsable Petco</h1>
    <hr>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Inicio</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="Mascotas.php">Mascotas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="Usuarios.php">Usuarios</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="./include/ReporteAdopciones.php">Reporte de Adopciones</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="./include/ReporteAdopcionesSimple.php">Reporte de Adopciones Simple</a>
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

  <main>

    <section class="container-fluid p-5">
      <h2 class="text-center display-5 text-primary text-uppercase"> Mascotas Saludables, Personas Felices</h2>
      <h3 class="text-center display-3 text-danger text-uppercase">Un mundo Mejor</h3>

      <p class="p-5 fs-5 text-center">
        En Petco los animales son primero, por ello somos amantes de las mascotas y conocemos el fuerte vínculo emocional que existe entre una mascota y su familia.<br><br>
        Todos los días, puedes adoptar una mascota en una tienda. Petco y nuestros socios comunitarios, diariamente ayudan a encontrar hogares para miles de perros, gatos, conejos y otras mascotas todas las semanas.
      </p>
    </section>
  </main>

</body>

</html>