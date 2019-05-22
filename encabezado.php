<?php 
        session_start();
if (empty($_SESSION['active'])) {
        echo    "<script>location.href='index.php';</script>";
}




 ?>
<header class="header-fixed col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xf-12">
            <div class="logo ">
                <p class="logotipo col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xf-12">REAM&#8482;</p>
            </div>

            <nav class="navegation col-lg-3 col-md-3 col-sm-5 col-xs-12 col-xf-12">
                <div class="container-nav col-lg-4 col-md-4 col-sm-4 col-xs-2 col-xf-12">
                    <a href="principal.php"><img src="svg/inicio.svg" alt=""></a>
                    <a href="salir.php"><img src="svg/candado.svg" alt=""></a> 
                </div>
            </nav>
        </header>
