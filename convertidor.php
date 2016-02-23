<?php 
include 'header.html';
?>
<div class="main">
	<div class="card">
		<div class="card-body">
			<h2>Convertidor de Kilos a Libras</h2>
			<form action="convertidor.php" method="post">
				<div class="form-group">
					<label for="valor">Ingresa el valor</label>
					<input name="valor" type="text" required pattern="[0-9]" title="Ingresa solo números">
				</div>
				<div class="form-group">
					<label for="conversion">Selecciona el tipo de conversion</label>
					<select name="conversion" id="" required>
						<option value="kilos_libras">Kilos / Libras</option>
						<option value="libras_kilos">Libras / Kilos</option>
					</select>
				</div>
				<div class="form-group">
					<button>Convertir</button>
				</div>
			</form>
			<?php 
				if(isset($_POST['valor']) && isset($_POST['conversion'])){
					$valor=$_POST['valor'];
					$conversion= $_POST['conversion'];
					if($conversion == 'kilos_libras'){
						$resultado = $valor * 2.2;
						echo "<h3>Son ".$resultado." Libras</h3>";
					}else if($conversion == 'libras_kilos'){
						$resultado = $valor * 0.454;
						echo "<h3>Son ".$resultado." Kilos</h3>";
					} else{
						echo "<h3>no puede realizarse la opción</h3>";
					}
				}
			?>
		</div>
	</div>
</div>
<?php 
include 'footer.html';
?>