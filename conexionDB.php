<?php

$servidor = "localhost";
$baseDatos= "lindavista";
$usuario = "root";
$contrasena = "root";

function insertaVivienda($nombre, $dni, $edad, $sexo, $raza, $fechaAlta, $foto)
{
    try {
        $conexion = new PDO("mysql:host=" . $GLOBALS['servidor'] . ";dbname=" . $GLOBALS['baseDatos'], $GLOBALS['usuario'], $GLOBALS['contrasena']); // Iniciamos la conexion a la base de datos.
        $sql = $conexion->prepare("INSERT into viviendas values(null,:nombre,:dni,:edad,:sexo,:raza,:fechaAlta,:foto)");  // Preparamos la pregunta sql que se va a realizar.
        $sql->bindParam(":nombre", $nombre);
        $sql->bindParam(":dni", $dni);
        $sql->bindParam(":edad", $edad);
        $sql->bindParam(":sexo", $sexo);
        $sql->bindParam(":raza", $raza);
        $sql->bindParam(":fechaAlta", $fechaAlta);
        $sql->bindParam(":foto", $foto);
        $sql->execute();
        $id = $conexion->lastInsertId();
        $conexion = null;
    } catch (PDOException $e) {
        echo $e;
    }
    
    return $id;
}

function obtenerViviendas()
{
    try {
        $conexion = new PDO("mysql:host=" . $GLOBALS['servidor'] . ";dbname=" . $GLOBALS['baseDatos'], $GLOBALS['usuario'], $GLOBALS['contrasena']); // Iniciamos la conexion a la base de datos.

        $sql = $conexion->prepare("SELECT all from viviendas;"); // Preparamos la pregunta sql que se va a realizar.
        $sql->execute(); // Ejecutamos la sentencia sql
        $viviendas = []; // Se crea un array donde se guardaran todas las viviendas recividas
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) { // Mientras que haya resultados en la busqueda, se introducen los datos de la busqueda en una fila nueva
            $viviendas[] = $row; // Guardamos la fila recibida en el array de viviendas
        }
        $conexion = null; // Cerramos conexion
    } catch (PDOException $e) {
        echo $e;
    }
    
    return $viviendas; // Devuelve el array de viviendas
}



?>