<?php 
include 'header.html';
?>
<div class="main">
	<div class="card">
		<div class="card-body">
			<h2>Formulario de contacto</h2>
			<form action="formulario.php" method="post">
				<div class="form-group">
					<label for="nombre">Ingresa tu nombre</label>
					<input name="nombre" type="text" required>
				</div>
				<div class="form-group">
					<label for="email">Ingresa tu email</label>
					<input name="email" type="email" required>
				</div>
				<div class="form-group">
					<label for="mensaje">Ingresa un mensaje</label>
					<textarea name="mensaje" type="text" rows="1" required></textarea>
				</div>
				<div class="form-group">
					<button>Enviar</button>
				</div>
			</form>
			<?php 
				if (isset($_POST['nombre']) and isset($_POST['email']) and isset($_POST['mensaje'])) {
					$contenido = "El usuario: ".$_POST['nombre']." con email ".$_POST['email']." dejo el siugiente mensaje: ".$_POST['mensaje'];
					mail("janoone52@gmail.com", "Mensaje Web", $contenido);
					echo "<h3>Mensaje enviado con exito";
				}
			?>
		</div>
	</div>
</div>
<?php 
include 'footer.html';
?>