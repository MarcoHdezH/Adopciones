<?php
session_start();
$band=0;
if (isset($_SESSION['datos']['Usuario'])) {
  $band=1;
} else {
  $band=0;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mascotas</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">

</head>

<body>
  <header class="container-fluid text-center p-5 bg-dark text-light">
    <h1>Refugio de Animales Fedora's</h1>
    <hr>
    <?php
    if($band===1){
      include './layout/HeaderUsuario.php';
    }else{
      include './layout/Header.php';
    }
    ?>
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