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

        $id = $_GET['varId']; //Se recibe el id de la vivienda introducida, esto se envia con el header de introduceCasa.php
        $vivienda = obtenerVivienda($id); //Se recibe toda la informacion de la vivienda con el id recibido
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

    <ul> <!-- Se imprime la informacion recibida de la vivienda -->
        <li>Tipo: <?php echo $vivienda["tipo"]; ?></li>
        <li>Zona: <?php echo $vivienda["zona"]; ?></li>
        <li>Direccion: <?php echo $vivienda["direccion"]; ?></li>
        <li>Numero de dormitorios: <?php echo $vivienda["ndormitorios"]; ?></li>
        <li>Precio: <?php echo $vivienda["precio"]; ?></li>
        <li>Tamaño: <?php echo $vivienda["tamano"]; ?></li>
        <li>Extras: <?php echo $vivienda["extras"]; ?></li>
        <li>Foto: <a href="images/<?php echo $vivienda["foto"]; ?>"><?php echo $vivienda["foto"]; ?></a> </li>
        <li>Observaciones: <?php echo $vivienda["observaciones"]; ?></li>
    </ul>
<a href="index.php">Volver al inicio</a>


</body>
</html>