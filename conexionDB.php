<?php

$servidor = "localhost";
$baseDatos= "lindavista";
$usuario = "root";
$contrasena = "root";

function insertaVivienda($tipo, $zona, $direccion, $ndormitorios, $precio, $tamano, $extras, $foto, $observaciones)
{
    try {
        $conexion = new PDO("mysql:host=" . $GLOBALS['servidor'] . ";dbname=" . $GLOBALS['baseDatos'], $GLOBALS['usuario'], $GLOBALS['contrasena']); // Iniciamos la conexion a la base de datos.
        $sql = $conexion->prepare("INSERT into viviendas values(null,:tipo,:zona,:direccion,:ndormitorios,:precio,:tamano,:extras,:foto,:observaciones)");  // Preparamos la pregunta sql que se va a realizar.
        $sql->bindParam(":tipo", $tipo);
        $sql->bindParam(":zona", $zona);
        $sql->bindParam(":direccion", $direccion);
        $sql->bindParam(":ndormitorios", $ndormitorios);
        $sql->bindParam(":precio", $precio);
        $sql->bindParam(":tamano", $tamano);
        $sql->bindParam(":extras", $extras);
        $sql->bindParam(":foto", $foto);
        $sql->bindParam(":observaciones", $observaciones);
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

        $sql = $conexion->prepare("SELECT all from viviendas"); // Preparamos la pregunta sql que se va a realizar.
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

function obtenerVivienda($id)
{
    try {
        $conexion = new PDO("mysql:host=" . $GLOBALS['servidor'] . ";dbname=" . $GLOBALS['baseDatos'], $GLOBALS['usuario'], $GLOBALS['contrasena']); // Iniciamos la conexion a la base de datos.

        $sql = $conexion->prepare("SELECT * FROM viviendas WHERE id=:id"); // Preparamos la pregunta sql que se va a realizar.
        $sql -> bindParam(":id", $id);
        $sql->execute(); // Ejecutamos la sentencia sql
        $row = $sql->fetch(PDO::FETCH_ASSOC);//Recive la fila de la tabla con toda la informacion de la vivienda
        $conexion = null; // Cerramos conexion

    } catch (PDOException $e) {
        echo $e;
    }
    
    return $row; // Devuelve la fila con la informacion de la vivienda
}

?>