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
	include('cabecera.php');
	include('sidebarIzq.php');
	?>
	
	<main>
    <article>
        <?php
            if (isset($_SESSION['esAdmin'])){
                echo "<h1>Consola de administración</h1>";
                echo "<p>Aquí estarían los controles para la administración de la web.</p>";
            } else {
                echo "<h1>ERROR</h1>";
                echo "<p>Debes iniciar sesion para ver contenido</p>";
            }
        ?>
    </article>
	</main>

	<?php
	include('sidebarDer.php');
	include('pie.php');
	?>
	

</div> <!-- Fin del contenedor -->

</body>
</html>