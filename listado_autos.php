<?php 
include 'header.html';
include 'conector.php';
try {
	$mysql->Query("CREATE DATABASE IF NOT EXISTS baseautos");
	$mysql->ChangeDb('baseautos');
	$mysql->Query("CREATE TABLE  IF NOT EXISTS auto (idauto TINYINT (3) UNSIGNED DEFAULT '0', marca CHAR (50) DEFAULT '0', modelo CHAR (50), agno CHAR (20), cilindro TINYINT(3), precio DOUBLE (10,2), imagen CHAR (20))");
	$result = $mysql->Query("select * from auto");
	if (count($result) < 1) {
		include 'llenar_base_autos.php';
		$result = llenar_base_autos($mysql);
	}
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
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php 
include 'footer.html';
?>