<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><h1>






	<?php 

	include 'conexion.php';

		$funcionario = $_POST['funcionario'];
		$cargo = $_POST['cargo'];
		$cedula = $_POST['cedula'];
		$telefono = $_POST['telefono'];
		$piso = $_POST['piso'];
		$dependencia = $_POST['dependencia'];
		$marca1 = $_POST['marca1'];
		$serie1 = $_POST['serie1'];
		$mac = $_POST['mac'];
		$marca2 = $_POST['marca2'];
		$serie2 = $_POST['serie2'];
		$marca3 = $_POST['marca3'];
		$serie3 = $_POST['serie3'];
		$marca4 = $_POST['marca4'];
		$serie4 = $_POST['serie4'];
		$cargador = $_POST['cargador'];
		$usuario = $_POST['usuario'];

	 $inc = $conec -> query("INSERT INTO inventarioo (id,funcionario,cargo,cedula,telefono,piso,dependencia,marca1,serie1,mac,marca2,serie2,marca3,serie3,marca4,serie4,cargador,usuario) VALUES ('','$funcionario','$cargo','$cedula','$telefono','$piso','$dependencia','$marca1','$serie1','$mac','$marca2','$serie2','$marca3','$serie3','$marca4','$serie4','$cargador','$usuario')");


	// Aqui esta lo que me da error, el comprueba si existe algo en la variable inc, pero me devuelve false, y por ende la condicional manda el echo "error"
		if ($inc) {
			echo "Se ha completado el registro";
			echo 
			"<script>
			location.href='registro.php';
			</script>";
		}else{
			echo "ERROR";

		}

	?>






</h1></center>
</body>
</html>
