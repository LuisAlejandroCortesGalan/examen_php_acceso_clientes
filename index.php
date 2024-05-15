<?php
session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTAL CLIENTES</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>identificate para acceder</h1>
    </header>
    <main>
        <form action="signIn.php" method="post">
            <fieldset>
                <legend>Identificación</legend>
                <div>
                    <label for="user">Email</label>
                    <input type="text" name="email" id="email">
                </div>
                <div>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="div-button">
                    <button type="submit">Ingresar</button>
                    <button type="reset">Borrar datos</button>
                </div>
                <div>
                    <p><?php $_SESSION['mensaje']?></p>
                </div>
            </fieldset>
        </form>
    </main>
</body>

</html>