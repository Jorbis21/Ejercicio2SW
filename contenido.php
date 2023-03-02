
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
            if (isset($_SESSION['login'])){
                echo "<h1>Brandon Sanderson</h1>";
                echo "<p>Brandon Sanderson (Lincoln, Nebraska, 19 de diciembre de 1975) es un escritor 
                estadounidense de literatura fantástica y ciencia ficción. Nacido en Nebraska, es miembro 
                de la Iglesia de Jesucristo de los Santos de los Últimos Días y actualmente reside en Provo (Utah), 
                con su esposa Emily con la que contrajo matrimonio el 7 de julio de 2006. Obtuvo un máster en 
                Literatura Creativa en 2005 en la Brigham Young University, donde fue compañero de habitación 
                del campeón de Jeopardy! Ken Jennings. Ha sido nominado dos veces para el Premio John W. Campbell.</p>";
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