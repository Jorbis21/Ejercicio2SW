<?php
session_start();
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
	//$_SESSION['usuario'] = 'El Orbo';
	//$_SESSION['clave'] = '1234';
	include('cabecera.php');
	include('sidebarIzq.php');
	//include('contenido.php');
	?>
	
	<main>
		<article>
			<h1>Página principal</h1>
			<p> Aquí está el contenido público, visible para todos los usuarios. </p>
		</article>
	</main>

	<?php
	include('sidebarDer.php');
	include('pie.php');
	?>
	

</div> <!-- Fin del contenedor -->

</body>
</html>