<?php 
	

	$alert = '';
session_start();
if (!empty($_SESSION['active'])) {
		echo 	"<script>location.href='principal.php';</script>";
}else{

	if (!empty($_POST))
	{
		if (empty($_POST['usuario']) OR empty($_POST['clave'])){

			 $alert = 'Ingrese su usuario y su clave';
		}else{

			require_once 'conexion.php';

			$user = mysqli_real_escape_string($conec,$_POST['usuario']);
			$pass = md5(mysqli_real_escape_string($conec,$_POST['clave']));

			$query = mysqli_query($conec,"SELECT * FROM usuario WHERE usuario = '$user' AND clave = '$pass'");
			$resp = mysqli_num_rows($query);

			if ($resp > 0) {
				$dato = mysqli_fetch_array($query);
		
				$_SESSION['active'] 	= true;
				$_SESSION['idusuario']	= $dato['idusuario'];
				$_SESSION['nombre']		= $dato['nombre'];
				$_SESSION['user']		= $dato['usuario'];
				$_SESSION['rol']		= $dato['rol'];

				echo 	"<script>
							location.href='inventario.php';
						</script>";
			}else{
				$alert = "El usuario o la clave son incorrectos";
				session_destroy();
			}
		}
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Inventario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>

<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xf-12">
        
		<header class="header-fixed col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xf-12">
				<div class="logo ">
					<p class="logotipo col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xf-12">REAM&#8482;</p>
				</div>
	
				<nav class="navegation col-lg-3 col-md-3 col-sm-5 col-xs-12 col-xf-12">
					<div class="container-nav col-lg-4 col-md-4 col-sm-4 col-xs-2 col-xf-12">
						<a href="#"><img src="svg/inicio.svg" alt=""></a>
						<a href="#"><img src="svg/candado.svg" alt=""></a>
					</div>
				</nav>
			</header>
	
			<section class="login col-lg-4 col-md-5 col-sm-5 col-xs-6 col-xf-10">
				<img  class="icon-account" src="img/user.png" alt="Login">
				<h1 class="title">Inicio de Sesion</h1>
				<div class="container-form col-lg-12 col-md-12 col-sm-12 col-xs-6 col-xf-10">
						<form  class="form col-lg-10 col-md-12 col-sm-12 col-xs-6 col-xf-10" action="" method="post">
							<div class="row"> 
								<span>
									<input class="balloon usuario" id="Usuario" type="text" name="usuario" required/><label for="Usuario">Usuario</label>
								</span>
	
								<span>
									<input class="balloon contraseña"  id="Contraseña" type="password" name="clave" required/><label for="Contraseña">Contraseña</label>
								</span>
								<p class="alert"><?php echo isset($alert)? $alert : ''; ?></p>
								<input class="boton" type="submit" value="Ingresar">
							</div>
							
						</form>
					</div> 
				</div>   
			</section>
	
		</div>
	
</body>
</html>