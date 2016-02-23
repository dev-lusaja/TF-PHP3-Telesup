<?php 
include 'header.html';
include 'conector.php';
try {
	$mysql->ChangeDb('baseautos');
} catch (Exception $e) {
	echo "<h3>".$e->getMessage()."</h3>";
	return;
}
?>
<div class="main">
	<div class="card">		
		<div class="card-body">
			<form action="busqueda.php" method="post">
				<div class="form-group">
					<label for="value">Ingrese el código o marca del auto</label>
					<input id="value" name="value" type="text" required>
				</div>
				<div class="form-group">
					<button>Buscar</button>
				</div>
			</form>
			<?php 
				if (isset($_POST['value'])) {
								$value = $_POST['value'];
								$sql = "select * from auto where idauto='".$value."' or marca='".strtoupper($value)."'";
								$result = $mysql->Query($sql);
								if (count($result) < 1) {
									echo "<h3>No se encontro ningun registro.</h3>";
									return;
								}
								?>
								<table class="listado">
									<thead>
										<tr>
											<th>Codigo</th>
											<th>Marca</th>
											<th>Modelo</th>
											<th>Año</th>
											<th>Cilindro</th>
											<th>Precio</th>
											<th>Imagen</th>
										</tr>
									</thead>
									<tbody>
								<?php
								for ($i=0; $i < count($result); $i++) { 
									echo "<tr>";
									echo "<td>".$result[$i]['idauto']."</td>";
									echo "<td>".$result[$i]['marca']."</td>";
									echo "<td>".$result[$i]['modelo']."</td>";
									echo "<td>".$result[$i]['agno']."</td>";
									echo "<td>".$result[$i]['cilindro']."</td>";
									echo "<td>".$result[$i]['precio']."</td>";
									echo "<td><img src='imgs/autos/".$result[$i]['imagen']."'></td>";
								}
							}
						?>
					</tbody>
				</table>
		</div>
	</div>
</div>
<?php 
include 'footer.html';
?>