<?php 
include 'header.html';
include 'conector.php';
try {
	$mysql->ChangeDb('clase5');
	$sql = "SELECT * FROM usuario";
	$result = $mysql->Query($sql);
} catch (Exception $e) {
	echo "<h3>".$e->getMessage()."</h3>";
	return;
}
?>
<div class="main">
	<div class="card">
		<div class="card-body">
			<table class="listado">
				<thead>
					<tr>
						<th>Codigo</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Pais</th>
					</tr>
				</thead>
				<tbody>
					<?php
						for ($i=0; $i < count($result) ; $i++) { 
							echo "<tr>";
							echo "<td>" . $result[$i]['cod_usu'] . "</td>";
							echo "<td>" . $result[$i]['nombre'] . "</td>";
							echo "<td>" . $result[$i]['email'] . "</td>";
							echo "<td>" . $result[$i]['pais'] . "</td>";
							echo "<tr>";
						}
					?>
			</tbody>
			</table>
			<br>
			<a class='inverted' href='registro.php'>Regresar</a>
		</div>
	</div>
</div>
<?php
include 'footer.html';
?>