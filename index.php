<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos.css">
</head>

<body>
<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img width="70 px" src="img/logo (1).png" alt="logo principal">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="views/nuestrospa.php">Nuestro Spa</a>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="views/productos.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Productos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Rostro</a></li>
            <li><a class="dropdown-item" href="#">Cuerpo</a></li>
            <li><a class="dropdown-item" href="#">Aceites</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="views/servicios.php">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

<main class="display: 1">
 <?php
        // Si hay parámetro vista en la URL, incluir la vista correspondiente
        if (isset($_GET['vista'])) {
            $vista = $_GET['vista'];
            $archivo = "views/$vista.php";

            if (file_exists($archivo)) {
                include $archivo;
            } else {
                echo "<p>La página no existe.</p>";
            }
        } else {
            include "views/nuestrospa.php"; // vista por defecto
        }
        ?>
</main>

<footer class="footer text-center py-3 mt-5">
    <div class="container">
        <p class="mb-0">
            &copy; 2025 <strong>Vida Sana Spa</strong> - Todos los derechos reservados
        </p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>