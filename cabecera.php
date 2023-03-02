<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Mi gran página web</h1>
		<div class="saludo">
        <?php
        if(isset($_SESSION['login'])){
            if(isset($_SESSION['esAdmin'])){
                echo "Bienvenido {$_SESSION['nombre']}. <a href='logout.php'>(salir)</a>";
            }
            else{
                echo "Bienvenido {$_SESSION['nombre']}. <a href='logout.php'>(salir)</a>";
            }
        }
        else{
            echo "Usuario desconocido. <a href='login.php'>Login</a>";
        }
        ?>
        </div>
	</header>
</body>
</html>