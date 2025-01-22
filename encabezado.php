<?php
// Definir variables
include_once('config/config.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $titulo; ?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" fill="#442f7f" width="40" height="32" role="img" aria-label="Home"><use xlink:href="#home"/></svg>
        </a>

		<h1 class="col-12 col-md-6 mb-2 justify-content-center mb-md-0"><?php echo $candidato; ?></h1>

        <ul class="nav col-md-3 text-end">
          <li><a href="apoyos" class="nav-link px-2 text-secondary">Apoyos</a></li>
          <li><a href="propuestas" class="nav-link px-2 text-white">Propuestas</a></li>
          <li><a href="https://dignidadycompromiso.co/" target="_blank" class="nav-link px-2 text-white">Partido</a></li>
        </ul>
      </div>
    </div>
  </header>
