<body>
<h1>Voto por <?php echo $candidato; ?></h1>
<p><img src="img/candidato.jpg" alt="<?php $candidato; ?>" /></p>
<form action="registro.php" method="POST"><label for="nombre">Nombre:</label><br /><input id="nombre" name="nombre" required="" type="text" /><br /><br /><label for="email">Correo electrónico:</label><br /><input id="email" name="email" required="" type="email" /><br /><br /><label for="email">Cédula:</label><br /><input id="cedula" name="cedula" required="" type="number" /><br /><br /><label for="telefono">Celular:</label><br /><input id="celular" name="celular" required="" type="number" /><br /><br /><input type="submit" value="Registrarse" /></form>
<main class="px-3">
<div class="card" style="width: 18rem;">
<img class="card-img-top" src="img/rza.jpg" alt="Rodrigo Zarate" />
<img class="card-img-top" src="img/number.jpg" alt="03" />
<div class="card-body">
<h5 class="card-title">Rodrigo Zarate</h5>
<h6>Registro de Usuario</h6>
<p class="card-text">Quiero ser Senador con tu apoyo podemos lograrlo.</p>
<a class="btn btn-primary" href="registro.php">Apoyar</a>
</div>
</div>
</main>
