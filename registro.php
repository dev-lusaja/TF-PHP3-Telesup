<?php 
include 'header.html';
?>
<div class="main">
	<div class="card">
		<div class="card-body">
			<h2>Registro de usuario</h2>
		<form action="grabar_usuario.php" method="post">
			<div class="form-group">
				<label for="name"> Ingresa tu nombre</label>			
				<input type="text" name="nombre" required></input>			
			</div>
			<div class="form-group">
				<label for="email">Ingresa tu email</label>	
				<input type="email" name="email" required></input>
			</div>
			<div class="form-group">
				<label for="pais">Selecciona Pais</label>			
				<select name="pais">
					<option value="peru">Peru</option>
					<option value="argentina">Argentina</option>
					<option value="costa rica">Costa Rica</option>
				</select>
			</div>
			<div class="form-group">
				<button>Grabar</button>	
				<a class="inverted" href="mostrar_usuarios.php">Mostrar todos</a>
			</div>
		</form>	
	</div>
</div>
</div>
<?php 
include 'footer.html';
?>