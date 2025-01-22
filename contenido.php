<div class="container">
	<div class="col d-flex justify-content-center">
		<main class="px-3 my-4">
			<div class="card" style="width: 22rem;">
				<img class="card-img-top" src="img/candidato.png" alt="<?php echo $candidato; ?>" />
				<img class="card-img-number" src="img/numero.png" alt="<?php echo $numero; ?>" />
				<div class="card-body">
					<h5 class="card-title">Apoyar</h5>
					<p class="card-text"><?php echo $slogan; ?></p>
					<form action="registro.php" method="POST">
						<div class="mb-3">
							<input placeholder="Nombre completo" id="nombre" name="nombre" required="" type="text" class="form-control"/>
						</div>
						<div class="mb-3">
							<input placeholder="Correo Electrónico" id="email" name="email" required="" type="email"  class="form-control"/>
						</div>
						<div class="mb-3">
							<input placeholder="Numero de Cédula" id="cedula" name="cedula" required="" type="number"  class="form-control"/>
						</div>
						<div class="mb-3">
							<input placeholder="Teléfono Móvil" id="celular" name="celular" required="" type="number"  class="form-control"/>
						</div>
						<div class="mb-3">
							<input id="datosp" name="datosp" required="" type="checkbox"  class="form-check-input"/>
							<label class="form-check-label" for="datosp">
   							 Apruebo el tratamiento de datos.
  							</label>
						</div>
						<div class="mb-3">
						<input type="submit" value="Apoyar" class="btn btn-primary"/>
						</div>		
					</form>
				</div>
			</div>
		</main>
	</div>
	<div class="col d-flex justify-content-center">
		<div class="card" style="width: 22rem;">
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<?php $actual = round(($apoyos * 100) / $meta); ?>
						<div class="faltante" style="height:<?php echo (100 - $actual);?>px; background:#ffccff"></div>
						<div class="apoyos" style="height:<?php echo $actual;?>px; background:#442f7f"></div>
						<h5 class="card-title">Apoyos:<?php echo $apoyos; ?></h5>
					</div>
					<div class="col-md-6">
						
						<div class="meta" style="height:100px; background:#993366"></div>
						<h5 class="card-title">Meta: <?php echo $meta; ?></h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
