<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <meta author="Carlos Maroto Castaño">
</head>
<body>
<?php

    session_start(); //Se inicia la sesion
    $usuario = $_POST["usuario"]; //Se recibe el usuario y la contraseña
    $contrasena = $_POST["contrasena"];

    if($usuario == $contrasena){ //Si son iguales entonces
        if(!isset( $_SESSION[strval("u".$usuario)])){ //Si no existe la sesion con valor usuario
        $_SESSION[strval("u".$usuario)] = 1; //Se crea la sesion con valor usuario y se da la bienvenida por primera vez
        echo "Bienvenido ". $usuario;
        }else{ // Si ya existe la sesion con valor usuario, entonces
            $veces = $_SESSION[strval("u".$usuario)]; //Se cuenta cuantas veces ha entrado en la aplicacionesta sesion

            $_SESSION[strval("u".$usuario)] = $veces + 1; //Se le da un nuevo valor a la sesion

            echo "Hola, bienvenido de nuevo a nuestra aplicacion ". $usuario; //Se da la bienvenida de nuevo
            
        }
        
    }else{
        header("Location: fallaSesion.php"); //Si no coinciden contraseña y usuario, da fallo, y te manda a otra pagina donde se informa de esto.s
    }

?>
</body>
</html>