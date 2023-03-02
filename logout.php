<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['nombre']);
unset($_SESSION['esAdmin']);
session_destroy();
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
		<article>
            <h1>Sesión cerrada</h1>
            <p>Gracias por visitar nuestra web. Hasta pronto.</p>
        </article>
	</main>

	<?php
	include('sidebarDer.php');
	include('pie.php');
	?>
	

</div> <!-- Fin del contenedor -->

</body>
</html>