<?php include 'conexion.php'?>
<!DOCTYPE html>
<html>
    <head>
        <title>Slider CSS - A Slider only with CSS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="page">
            <h1><center>Registro de Ordenadores</center></h1><br><br>
        
            <section>
                <input type="radio" name="slider-select-element" id="element1" checked="checked" />
                <input type="radio" name="slider-select-element" id="element2" />
                <input type="radio" name="slider-select-element" id="element3" />
                
                <div id="slider-container">
                    <div id="slider-box">
                        <div class="slider-element">
                            <article class="element-red">

                                <table border="1px" width="100%" align="center">
                                    <th align="center">ID</th>
                                    <th align="center">Funcionario</th>
                                    <th align="center">Usuario</th>
                                    <th align="center">Cargo</th>
                                    <th align="center">Cedula</th>
                                    <th align="center">Telefono</th>
                                    <th align="center">Piso</th>
                                
                                    <?php
                                        $sel = $conec ->query(" SELECT * FROM inventarioo ");
                                        while ($fila = $sel -> fetch_assoc()) {
                                        ?>
                                        <tr align="center">
                                            <td><?php echo $fila['id'] ?></td>
                                            <td><?php echo $fila['funcionario'] ?></td>
                                            <td><?php echo $fila['usuario'] ?></td>
                                            <td><?php echo $fila['cargo'] ?></td>
                                            <td><?php echo $fila['cedula'] ?></td>
                                            <td><?php echo $fila['telefono'] ?></td>
                                            <td><?php echo $fila['piso'] ?></td>
                                        </tr>
                                    <?php } ?>

                                </table>

                            </article>
                        </div>
                        <div class="slider-element">
                            <article class="element-green">

                                <table border="1px" width="100%" align="center">
                                    <th>Dependencia</th>
                                    <th>Marca PC</th>
                                    <th>Serial PC</th>
                                    <th>Mac Adrees</th>
                                    <th>Marca Monitor</th>
                                    <th>Serial Monitor</th>
                               
                                    <?php
                                        $sel = $conec ->query(" SELECT * FROM inventarioo ");
                                        while ($fila = $sel -> fetch_assoc()) {
                                        ?>
                                        <tr align="center">
                                            <td><?php echo $fila['dependencia'] ?></td>
                                            <td><?php echo $fila['marca1'] ?></td>
                                            <td><?php echo $fila['serie1'] ?></td>
                                            <td><?php echo $fila['mac'] ?></td>
                                            <td><?php echo $fila['marca2'] ?></td>
                                            <td><?php echo $fila['serie2'] ?></td>
                                        </tr>
                                    <?php } ?>  

                                </table>
                                
                            </article>
                        </div>
                        <div class="slider-element">
                            <article class="element-blue">
                                <table border="1px" width="100%" align="center">
                                    <th>Marca Teclado</th>
                                    <th>Serial Teclado</th>
                                    <th>Marca Mouse</th>
                                    <th>Serial Mouse</th>
                                    <th>S/Corriente</th>
                                    <th></th>
                                    <th></th>

                                    <?php
                                            $sel = $conec ->query(" SELECT * FROM inventarioo ");
                                            while ($fila = $sel -> fetch_assoc()) {
                                            ?>
                                            <tr align="center">
                                            <td><?php echo $fila['marca3'] ?></td>
                                                <td><?php echo $fila['serie3'] ?></td>
                                                <td><?php echo $fila['marca4'] ?></td>
                                                <td><?php echo $fila['serie4'] ?></td>
                                                <td><?php echo $fila['cargador'] ?></td>
                                                <td><a href="actualizacion.php?id=<?php echo $fila['id'] ?>">Editar</a></td>
                                                <td><a href="borrar.php?id=<?php echo $fila['id'] ?>">ELIMINAR</a></td>
                                            </tr>
                                    <?php } ?>

                                </table>
                                
                            </article>                            
                        </div>
                    </div>
                </div>
                
                <div id="slider-arrows">
                    <label for="element1"></label>
                    <label for="element2"></label>
                    <label for="element3"></label>
                </div>
            </section>            
        </div>
    </body>
</html>