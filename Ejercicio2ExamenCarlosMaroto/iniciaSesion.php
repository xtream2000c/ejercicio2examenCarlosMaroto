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

    session_start();
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if($usuario == $contrasena){
        if(!isset( $_SESSION[strval($usuario)])){
        $_SESSION[strval($usuario)] = 1;
        echo "Bienvenido ". $usuario;
        }else{
            $veces = $_SESSION[strval($usuario)];

            $_SESSION[strval($usuario)] = $veces + 1;

            echo "Hola, bienvenido de nuevo a nuestra aplicacion ". $usuario;
            
        }
        
    }else{
        header("Location: fallaSesion.php");
    }

?>
</body>
</html>