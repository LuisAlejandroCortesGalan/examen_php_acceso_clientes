<?php

session_start();
// Desactivar toda notificación de error
error_reporting(0);

// datos que se envían desde el formulario
$email = $_POST['email'];
$key = $_POST['password'];
$name = "";
$surname = "";
$birthdate = "";
$age = 0;
$img = "";
$mensaje = "";


// obtener los datos del json
$json = file_get_contents('customers.json');
$clientes = json_decode($json, true);
// print_r($clientes)

$empleadoEncontrado = false;
for ($i = 0; $i < count($clientes); $i++) {
    if ($email == $clientes[$i]['email'] && $key == $clientes[$i]['key']) {
        // echo "Bienvenido " . $clientes[$i]['name'];
        $name = $clientes[$i]['name'];
        $surname = $clientes[$i]['surname'];
        $birthdate = $clientes[$i]['dateBirth'];
        // $age = calcularEdad($birthdate);
        $empleadoEncontrado = true;
        $img = $clientes[$i]['foto'];
        break;
    }

}

if ($empleadoEncontrado == false) {
    $_SESSION["display"] = "flex";
    header('Location: index.php');
}

function calcularEdad($fecha)
{
    $hoy = explode("-", date("Y-m-d"));
    $hoyYear = $hoy[0];
    $hoyMonth = $hoy[1];
    $hoyDay = $hoy[2];

    $birth = explode("-", $fecha);
    $birthYear = $birth[0];
    $birthMonth = $birth[1];
    $birthDay = $birth[2];

    $edad = $hoyYear - $birthYear;

    if (($hoyMonth < $birthMonth)  || (($hoyMonth == $birthMonth) && ($hoyDay < $birthDay))) {
        $edad = $edad - 1;
    }
    echo $edad;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <div>
            <img src="img_customers/<?= $img ?>" alt="Foto de <?= $name ?>">
        </div>
        <div>
            <h1>Datos del Cliente:</h1>
            <p>Nombre: <?= $name ?></p>
            <p>Apellido: <?= $surname ?></p>
            <p>Edad: <?= calcularEdad($birthdate) ?></p>
            <p>Email: <?= $email ?></p>
        </div>
    </main>
</body>

</html>