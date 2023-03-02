<?php
    session_start();
    $usuario = htmlspecialchars(trim(strip_tags($_POST["usuario"]))); //trim quita espacios en blanco
    $clave = htmlspecialchars(trim(strip_tags($_POST["clave"])));
    if($usuario == "user" && $clave == "userpass"){
        $_SESSION['login'] = true;
        $_SESSION['nombre'] = "Usuario";
    } 
    else if($usuario == "admin" && $clave == "adminpass"){
        $_SESSION['login'] = true;
        $_SESSION['nombre'] = "Administrador";
        $_SESSION['esAdmin'] = true;
    }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Portada</title>
</head>

<body>

<div id="contenedor">

	<?php
	include('cabecera.php');
	include('sidebarIzq.php');
	?>
	
	<main id = "contenido">
		<?php
            if(!isset($_SESSION['login'])){
                echo "<h1>ERROR</h1>";
                echo "<p>El usuario o contraseña no son válidos.</p>";
            }
            else{
                echo "<h1>Bienvenido {$_SESSION['nombre']}</h1>";
                echo "<p>Usa el menú de la izquierda para navegar.</p>";
            }
        ?>
	</main>

	<?php
	include('sidebarDer.php');
	include('pie.php');
	?>
	

</div> <!-- Fin del contenedor -->

</body>
</html>