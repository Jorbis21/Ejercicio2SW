<?php
    session_start();
    $usuario = htmlspecialchars(trim(strip_tags($_GET["usuario"]))); //trim quita espacios en blanco
    $clave = htmlspecialchars(trim(strip_tags($_POST["clave"])));
    if($usuario == "Orbis" && $clave == "1234"){
        $_SESSION['login'] = true;
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
    } else {
        $_SESSION['autenticado'] = false;
        header("Location: login.php");
        //sa
    }
?>