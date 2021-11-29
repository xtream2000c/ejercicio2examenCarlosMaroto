<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu principal</title>
    <meta author = "Carlos Maroto Castaño">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <?php 
        
        include_once "conexionDB.php"; //Se incluye el archivo de conexion a base de datos

            $tipo= array_key_exists("tipo",$_POST) ? $_POST["tipo"] : "todos"; //Se asigna el valor a $tipo, si se recibe por post se introduce ese valor, si no se recibe nada, entonces se le asigna el valor todos
    
        if ($tipo == "todos") { //Si tipo es todos, se llama a la funcion para obtener todas las viviendas
            $viviendas = obtenerViviendas();
        }else{ //Si tipo no vale todos y tiene un valor concreto, se filtra la busqueda por el tipo.
            $viviendas = obtenerViviendasTipo($tipo);
        }
        
        
    ?>

    <header>
        <h1> Inmobiliaria NOVENDONUNCANA S.A. </h1>
    </header>

    <nav class="navegador"> 
        <ul>
            <li><a href="introduceCasa.php">Introducir vivienda</a></li>
            <li><a href="consultaCasa.php">Consultar viviendas</a></li>
        </ul>
    </nav>

    <form class="form-register" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
        <label for="tipo">Mostrar viviendas de tipo: </label>
        <select name="tipo">
            <option value="todos">Todos</option>
            <option value="piso">Piso</option>
            <option value="adosado">Adosado</option>
            <option value="chalet">Chalet</option>
            <option value="casa">Casa</option>
        </select>

        <input type="submit" value="Actualizar">
    </form>

    <table class="tabla">
        <tr>
            <th>Tipo</th>
            <th>Zona</th>
            <th>Dormitorios</th>
            <th>Precio</th>
            <th>Tamaño</th>
            <th>Extras</th>
            <th>Foto</th>
        </tr>
        <?php

        foreach ($viviendas as $vivienda) { //Foreach con que se imprimen todas las filas de la tabla, una por cada vivienda.
            
            echo "<tr>";
            echo "<td>".$vivienda["tipo"]."</td>";
            echo "<td>".$vivienda["zona"]."</td>";
            echo "<td>".$vivienda["ndormitorios"]."</td>";
            echo "<td>".$vivienda["precio"]."</td>";
            echo "<td>".$vivienda["tamano"]."</td>";
            echo "<td>".$vivienda["extras"]."</td>";
            echo "<td><a href='images/".$vivienda["foto"]."'>".$vivienda["foto"]."</a></td>";
            echo "</tr>";

        }

        ?>
    </table>
</body>
</html>