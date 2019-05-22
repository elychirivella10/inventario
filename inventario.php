<?php include 'conexion.php'; ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
	<link rel="shortcut icon" href="img/favicon.png"> 
    <title>REMA INVENTARIO</title>
</head>
<body class="todo">
    <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
<?php include 'encabezado.php' ?>

        <section lass="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 vive">Inventario</p>
        </section>
        
        <div class="imagen-con-transparencia">
      
<table border="0" width="300%" align="center">
		<th>
		<tr>ID</tr>
		<tr>Funcionario</tr>
		<tr>Usuario</tr>
		<tr>Cargo</tr>
		<tr>Cedula</tr>
		<tr>Telefono</tr>
		<tr>Piso</tr>
		<tr>Dependencia</tr>
		<tr>Marca PC</tr>
		<tr>Serial PC</tr>
		<tr>MAC Adrees</tr>
		<tr>Marca Monitor</tr>
		<tr>Serial Monitor</tr>
		<tr>Marca Teclado</tr>
		<tr>Serial Teclado</tr>
		<tr>Marca Mouse</tr>
		<tr>Serial Mouse</tr>
		<tr>Cargador PC</tr>
		<tr></tr>
		<tr></tr>
	    </th>

</table><table>
		<?php


		$sel = $conec ->query(" SELECT * FROM inventarioo ");
		while ($fila = $sel -> fetch_assoc()) {
		?>
		<th align="center">
			<td><?php echo $fila['id'] ?></td>
			<td><?php echo $fila['funcionario'] ?></td>
			<td><?php echo $fila['usuario'] ?></td>
			<td><?php echo $fila['cargo'] ?></td>
			<td><?php echo $fila['cedula'] ?></td>
			<td><?php echo $fila['telefono'] ?></td>
			<td><?php echo $fila['piso'] ?></td>
			<td><?php echo $fila['dependencia'] ?></td>
			<td><?php echo $fila['marca1'] ?></td>
			<td><?php echo $fila['serie1'] ?></td>
			<td><?php echo $fila['mac'] ?></td>
			<td><?php echo $fila['marca2'] ?></td>
			<td><?php echo $fila['serie2'] ?></td>
			<td><?php echo $fila['marca3'] ?></td>
			<td><?php echo $fila['serie3'] ?></td>
			<td><?php echo $fila['marca4'] ?></td>
			<td><?php echo $fila['serie4'] ?></td>
			<td><?php echo $fila['cargador'] ?></td>
			<td><a href="actualizacion.php?id=<?php echo $fila['id'] ?>">Editar</a></td>
			<td><a href="borrar.php?id=<?php echo $fila['id'] ?>">ELIMINAR</a></td>
		</th>

	<?php } ?>

</table> 
            <div class="arriba"></div>
        </div>
    </body></html>