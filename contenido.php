<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Apoyar</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Propuestas</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Partido</a></li>
        </ul>
      </div>
    </div>
  </header>
<div class="container">
<h1>Voto por <?php echo $candidato; ?></h1>
<main class="px-3">
<div class="card" style="width: 18rem;">
<img class="card-img-top" src="img/candidato.png" alt="Rodrigo Zarate" />
<img class="card-img-top" src="img/number.png" alt="<?php echo $numero; ?>" />
<div class="card-body">
<h5 class="card-title">Rodrigo Zarate</h5>
<h6>Registro de Usuario</h6>
<p class="card-text">Quiero ser Senador con tu apoyo podemos lograrlo.</p>
<form action="registro.php" method="POST"><label for="nombre">Nombre:</label><br /><input id="nombre" name="nombre" required="" type="text" /><br /><br /><label for="email">Correo electrónico:</label><br /><input id="email" name="email" required="" type="email" /><br /><br /><label for="email">Cédula:</label><br /><input id="cedula" name="cedula" required="" type="number" /><br /><br /><label for="telefono">Celular:</label><br /><input id="celular" name="celular" required="" type="number" /><br /><br /><input type="submit" value="Apoyar" /></form>
</div>
</div>
</main>
