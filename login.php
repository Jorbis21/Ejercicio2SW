<?php
    session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Inicio de sesión</title>
</head>
<body>
    <div id=contenedor>
        <?php
            include('cabecera.php');
            include('sidebarIzq.php');
        ?>
        <main>
            <article> 
                <h1>Inicia sesión</h1>
                <form action="procesarLogin.php" method="post">
                    <p>Usuario</p>
                    <input type="text" name="usuario" id="usuario">
                    <p>Contraseña</p>
                    <input type="password" name="clave" id="clave">
                    <p></p>
                    <input type="submit" value="Iniciar sesión">
                </form>
            </article>
        </main>
        <?php
            include('sidebarDer.php');
            include('pie.php');
        ?>
    </div>
</body>
</html>