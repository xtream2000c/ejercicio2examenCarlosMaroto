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
        
        include_once "conexionDB.php";

        $id = $_GET['varId'];
        $vivienda = obtenerVivienda($id);
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

    <ul>
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



</body>
</html>