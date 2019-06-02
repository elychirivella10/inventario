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
					<input class="balloon indent" id="Funcionario" type="text" name="funcionario" autocomplete="nos" required/><label class="label" for="Funcionario">Nombre</label>
				</span>
				<span>
					<input class="balloon indent" id="Cargo" type="text" name="cargo" autocomplete="nos" required/><label class="label" for="Cargo">Cargo</label>
				</span>
				<span>
					<input class="balloon indent" id="Cedula" type="text" name="cedula" autocomplete="nos" required/><label class="label" for="Cedula">Cedula</label>
				</span>
				<span>
					<input class="balloon indent" id="Telefono" type="text" name="telefono" autocomplete="nos" required/><label class="label" for="Telefono">Telefono</label>
				</span>
				<span>
					<input class="balloon indent" id="Piso" type="text" name="piso" autocomplete="nos" required/><label class="label" for="Piso">Piso</label>
				</span>
				<span>
					<input class="balloon indent" id="Dependencia" type="text" name="dependencia" autocomplete="nos" required/><label class="label" for="Dependencia">Dependencia</label>
				</span>
				<span>
					<input class="balloon indent" id="Marca1" type="text" name="marca1" autocomplete="nos" required/><label class="label" for="Marca1">Marca de PC</label>
				</span>
				<span>
					<input class="balloon indent" id="Serie1" type="text" name="serie1" autocomplete="nos" required/><label class="label" for="Serie1">Serial del PC</label>
				</span>
				<span>
					<input class="balloon indent" id="Mac" type="text" name="mac" autocomplete="nos" required/><label class="label" for="Mac">MAC</label>
				</span>
				<span>
					<input class="balloon indent" id="Marca2" type="text" name="marca2" autocomplete="nos" required/><label class="label" for="Marca2">Marca del Monitor</label>
				</span>
				<span>
					<input class="balloon indent" id="Serie2" type="text" name="serie2" autocomplete="nos" required/><label class="label" for="Serie2">Serial del Monitor</label>
				</span>
				<span>
					<input class="balloon indent" id="Marca3" type="text" name="marca3" autocomplete="nos" required/><label class="label" for="Marca3">Marca del Teclado</label>
				</span>
				<span>
					<input class="balloon indent" id="Serie3" type="text" name="serie3" autocomplete="nos" required/><label class="label" for="Serie3">Serial del Teclado</label>
				</span>
				<span>
					<input class="balloon indent" id="Marca4" type="text" name="marca4" autocomplete="nos" required/><label class="label" for="Marca4">Marca del Mouse</label>
				</span>
				<span>
					<input class="balloon indent" id="Serie4" type="text" name="serie4" autocomplete="nos" required/><label class="label" for="Serie4">Serial del Mouse</label>
				</span>
				<span>
					<input class="balloon indent" id="Cargador" type="text" name="cargador" autocomplete="nos" required/><label class="label" for="Cargador">S/Corriente</label>
				</span>
				<span>
					<input class="balloon indent" id="Usuario" type="text" name="usuario" autocomplete="nos" required/><label class="label" for="Usuario">Nombre de Usuario</label>
				</span>
			</div>

			<div class="submit-reset">
				<input class="boton submit-registro" type="submit" value="Enviar Registro">
				<input class="boton reset" type="reset" value="Iniciar de nuevo">
		</div>
	</form>
		



	</section>

	<div class="menu-wrapper">
                    
                    <input type="checkbox" id="myml-menu-toggle"/>
                    
                    <nav class="myml-nav" role="complementary">
                        <div class="myml-nav__container">
                            <section class="myml-nav__section myml-nav__section--toggle">
                                <div class="myml-nav__section-heading">
                                    <span class="myml-nav__section-icon">
                                        <label class="myml-nav__toggle" for="myml-menu-toggle">
                                            <svg viewBox="0 0 512 512">
                                            <path d="M491.318,235.318H20.682C9.26,235.318,0,244.577,0,256s9.26,20.682,20.682,20.682h470.636
                                                c11.423,0,20.682-9.259,20.682-20.682C512,244.578,502.741,235.318,491.318,235.318z"/>
                                        
                                            <path d="M491.318,78.439H20.682C9.26,78.439,0,87.699,0,99.121c0,11.422,9.26,20.682,20.682,20.682h470.636
                                                c11.423,0,20.682-9.26,20.682-20.682C512,87.699,502.741,78.439,491.318,78.439z"/>
                                        
                                            <path d="M491.318,392.197H20.682C9.26,392.197,0,401.456,0,412.879s9.26,20.682,20.682,20.682h470.636
                                                c11.423,0,20.682-9.259,20.682-20.682S502.741,392.197,491.318,392.197z"/>
                                        </label>  
                                    </span>
                                    <p class="myml-nav__section-title">
                                        <span class="myml-nav__user-permalink">REAM&#8482;</span>
                                        <span class="myml-nav__section-subtitle"></span>
                                    </p>
                                </div>
                            </section>

                            <div class="myml-nav__menu">
                                <section class="myml-nav__section  ">
                                    <a href="principal.php" class="myml-nav__section-heading">
                                    <span class="myml-nav__section-icon myml-nav__section-icon--myml_summary">

                                    <img class="icon-menu" src="img/house.png" alt="">        

                                    </span>
                            <p class="myml-nav__section-title">Inicio</p>
                            </a>
                        
                        </section>

                        
                        <section class="myml-nav__section">
                            
                            <input type="checkbox" class="myml-nav__section-toggle-trigger" id="myml-menu-section-toggle-my_purchases"  readonly=""/>
                            
                            <span class="myml-nav__section-heading myml-nav__section-heading--has-items">
                                
                                <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--my_purchases">

                                        <img class="icon-menu" src="img/boxes.png" alt="">

                                    </label>
                                    
                                <label for="myml-menu-section-toggle-my_purchases" class="myml-nav__section-title">Inventario</label>
                                
                            </span>
                            
                            <div class="myml-nav__section-list">
                                
                                <a class="myml-nav__menu-item" href="inventario.php" ">
                                    <span class="myml-nav__menu-item-text">Movil</span>
                                </a>
                                
                                <a class="myml-nav__menu-item" href="#" >
                                    <span class="myml-nav__menu-item-text">PC</span>
                                </a>

                                <a class="myml-nav__menu-item" href="#">
                                    <span class="myml-nav__menu-item-text">Laptop</span>
                                </a>

                            </div>
                        </section>
                
                
                
                <section class="myml-nav__section  myml-nav__section--has-active-item  myml-nav__section--active">

                    <input type="checkbox" class="myml-nav__section-toggle-trigger" id="myml-menu-section-toggle-my_sales"  checked=""/>
                    
                    <span class="myml-nav__section-heading myml-nav__section-heading--has-items">
                        
                        <label for="myml-menu-toggle" class="myml-nav__section-icon myml-nav__section-icon--my_sales">

                        <img class="icon-menu" src="img/notes.png" alt="">
                        
                        </label>
                        
                        <label for="myml-menu-section-toggle-my_sales" class="myml-nav__section-title">Registro</label>
                        
                        </span>
                    
                    <div class="myml-nav__section-list">

                        <a class="myml-nav__menu-item" href="registro.php">
                            <span class="myml-nav__menu-item-text">PC</span>
                            </a>

                            <a class="myml-nav__menu-item" href="#">
                                <span class="myml-nav__menu-item-text">Movil</span>
                            </a>

                            <a class="myml-nav__menu-item" href="#">
                                <span class="myml-nav__menu-item-text">Laptop</span>
                            </a>

                            <a class="myml-nav__menu-item" href="#"><span class="myml-nav__menu-item-text">Impresora</span></a></div></section>

                    
                    <section class="myml-nav__section  ">
                        <a href="salir.php" class="myml-nav__section-heading">
                        <span class="myml-nav__section-icon myml-nav__section-icon--myml_summary">

                            <img class="icon-menu rotate" src="img/logout.png" alt="">

                        </span>
                <p class="myml-nav__section-title">Salir</p>
                </a>

            </section>

                </div>
            </div>
            </nav>
            </div>

    </div>
	
</body>
</html>
