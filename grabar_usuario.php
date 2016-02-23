<?php 
include 'header.html';
include 'conector.php';
try {
	$mysql->Query('CREATE DATABASE IF NOT EXISTS clase5');
	$mysql->ChangeDb('clase5');
	$sql = "CREATE TABLE IF NOT EXISTS usuario(
		cod_usu int NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(cod_usu),
		nombre varchar(20),
		email varchar(40),
		pais varchar(20)
		)";
	$mysql->Query($sql);

	if ($_POST) {
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$pais = $_POST['pais'];
		$sql = "SELECT * FROM usuario where nombre='". $nombre . "' and email='". $email ."' and pais='". $pais ."'";
		$result = $mysql->Query($sql);
		if (count($result) >= 1) {
		echo  "<div class='main'>
					<div class='card'>
						<div class='card-body'>
							<h2>Lo sentimo esos datos ya fueron registrados.</h2>
							<a class='inverted' href='registro.php'>Regresar</a>
						</div>
					</div>
				</div>";
				include 'footer.html';
			return;
		}
		$sql = "INSERT INTO usuario(nombre, email, pais) values ('".$nombre."', '".$email."', '".$pais."')";
		$mysql->Query($sql);
		echo  "<div class='main'>
					<div class='card'>
						<div class='card-body'>
							<h2>Datos registrados con exito</h2>
							Nombre: $nombre<br>
							Email: $email<br>
							Pais: $pais<br>
							<a class='inverted' href='registro.php'>Regresar</a>
						</div>
					</div>
				</div>";
	} else {
		echo  "<div class='main'>
					<div class='card'>
						<div class='card-body'>
							<h2>No se envió data por el metodo POST.</h2>
							<a class='inverted' href='registro.php'>Regresar</a>
						</div>
					</div>
				</div>";
				include 'footer.html';
			return;
	}
} catch (Exception $e) {
	echo $e->getMessage();
}
include 'footer.html';
?>