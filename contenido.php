<?php
session_start();
if (isset($_SESSION['usuario'])){
    echo "<main><article><p>Brandon Sanderson (Lincoln, Nebraska, 19 de diciembre de 1975) es un escritor 
    estadounidense de literatura fantástica y ciencia ficción. Nacido en Nebraska, es miembro 
    de la Iglesia de Jesucristo de los Santos de los Últimos Días y actualmente reside en Provo (Utah), 
    con su esposa Emily con la que contrajo matrimonio el 7 de julio de 2006. Obtuvo un máster en 
    Literatura Creativa en 2005 en la Brigham Young University, donde fue compañero de habitación 
    del campeón de Jeopardy! Ken Jennings. Ha sido nominado dos veces para el Premio John W. Campbell.</p></article></main>";
} else {
    echo "<main><article><p>Debes iniciar sesion para ver contenido</p></article></main>";
}
?>