<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <?php
    session_start();
    $band = 0;
    if (isset($_SESSION['datos']['Usuario'])) {
        session_destroy();
        echo '<div class="text-center p-5">
                <h1 class="mb-5">Cerresta sesión de forma Correcta</h1>
                <a class="btn btn-outline-dark" href="../index.php">Regresar al Menu Principal</a>
              </div>';
    } else {
        echo '<div class="text-center p-5">
                <h1 class="mb-5">No has iniciado Sesion</h1>
                <a class="btn btn-outline-dark" href="../index.php">Regresar al Menu Principal</a>
              </div>';
    }
    ?>
</body>

</html>