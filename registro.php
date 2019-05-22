<!DOCTYPE html>
<html>
<head>
	<title>Login Inventario</title>
	<meta charset="utf-8">
	<?php include 'enlaces.php' ?>
</head>
<body>

	<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php include 'encabezado.php' ?>

		<section class="login registro col-lg-6 col-md-7 col-sm-12 col-xs-12 col-xf-12">
		<form class="form col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xf-12" action="proceso.php" method="post">
			<img class="icon-account icon-registro" src="img/registro.png" alt="">
			<h1 class="title ti-registro">Registro</h1>

			<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xf-12">
				<span>
					<input class="balloon indent" id="Funcionario" type="text" name="funcionario" autocomplete="nos"/><label class="label" for="Funcionario">Nombre</label>
				</span>
				<span>
					<input class="balloon indent" id="Cargo" type="text" name="cargo" autocomplete="nos"/><label class="label" for="Cargo">Cargo</label>
				</span>
				<span>
					<input class="balloon indent" id="Cedula" type="text" name="cedula" autocomplete="nos"/><label class="label" for="Cedula">Cedula</label>
				</span>
				<span>
					<input class="balloon indent" id="Telefono" type="text" name="telefono" autocomplete="nos"/><label class="label" for="Telefono">Telefono</label>
				</span>
				<span>
					<input class="balloon indent" id="Piso" type="text" name="piso" autocomplete="nos"/><label class="label" for="Piso">Piso</label>
				</span>
				<span>
					<input class="balloon indent" id="Dependencia" type="text" name="dependencia" autocomplete="nos"/><label class="label" for="Dependencia">Dependencia</label>
				</span>
				<span>
					<input class="balloon indent" id="Marca1" type="text" name="marca1" autocomplete="nos"/><label class="label" for="Marca1">Marca de PC</label>
				</span>
				<span>
					<input class="balloon indent" id="Serie1" type="text" name="serie1" autocomplete="nos"/><label class="label" for="Serie1">Serial del PC</label>
				</span>
				<span>
					<input class="balloon indent" id="Mac" type="text" name="mac" autocomplete="nos"/><label class="label" for="Mac">MAC</label>
				</span>
				<span>
					<input class="balloon indent" id="Marca2" type="text" name="marca2" autocomplete="nos"/><label class="label" for="Marca2">Marca del Monitor</label>
				</span>
				<span>
					<input class="balloon indent" id="Serie2" type="text" name="serie2" autocomplete="nos"/><label class="label" for="Serie2">Serial del Monitor</label>
				</span>
				<span>
					<input class="balloon indent" id="Marca3" type="text" name="marca3" autocomplete="nos"/><label class="label" for="Marca3">Marca del Teclado</label>
				</span>
				<span>
					<input class="balloon indent" id="Serie3" type="text" name="serie3" autocomplete="nos"/><label class="label" for="Serie3">Serial del Teclado</label>
				</span>
				<span>
					<input class="balloon indent" id="Marca4" type="text" name="marca4" autocomplete="nos"/><label class="label" for="Marca4">Marca del Mouse</label>
				</span>
				<span>
					<input class="balloon indent" id="Serie4" type="text" name="serie4" autocomplete="nos"/><label class="label" for="Serie4">Serial del Mouse</label>
				</span>
				<span>
					<input class="balloon indent" id="Cargador" type="text" name="cargador" autocomplete="nos"/><label class="label" for="Cargador">S/Corriente</label>
				</span>
				<span>
					<input class="balloon indent" id="Usuario" type="text" name="usuario" autocomplete="nos" /><label class="label" for="Usuario">Nombre de Usuario</label>
				</span>
			</div>

			<div class="submit-reset">
				<input class="boton submit-registro" type="submit" value="Enviar Registro">
				<input class="boton reset" type="reset" value="Iniciar de nuevo">
		</div>
	</form>
		



	</section>
    </div>
	
</body>
</html>
