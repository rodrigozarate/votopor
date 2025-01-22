<div class="container">
	<div class="col d-flex justify-content-center">
		<main class="px-3 my-4">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="img/candidato.png" alt="<?php echo $candidato; ?>" />
				<img class="card-img-number" src="img/numero.png" alt="<?php echo $numero; ?>" />
				<div class="card-body">
					<h5 class="card-title">Apoyar</h5>
					<p class="card-text"><?php echo $slogan; ?></p>
					<form action="registro.php" method="POST">
						<label for="nombre">Nombre:</label><br />
						<input id="nombre" name="nombre" required="" type="text" />
						<label for="email">Correo electrónico:</label>
						<input id="email" name="email" required="" type="email" />
						<label for="email">Cédula:</label>
						<input id="cedula" name="cedula" required="" type="number" />
						<label for="telefono">Celular:</label>
						<input id="celular" name="celular" required="" type="number" />
						<input type="submit" value="Apoyar" />
					</form>
				</div>
			</div>
		</main>
	</div>
</div>	
