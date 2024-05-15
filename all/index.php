<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="../css/style_cards.css">
</head>

<body>
    <header>
        <h1>Nuestros clientes</h1>
    </header>
    <main>
        <?php
        $json = file_get_contents('C:\xampp\htdocs\cief_apps\examen_php\exercici_customers_PHP_enunciat\customers.json');
        $clientes = json_decode($json, true);

        // Iterar sobre cada cliente y generar una tarjeta para cada uno
        foreach ($clientes as $cliente) {
            $name = $cliente['name'];
            $surname = $cliente['surname'];
            $birthdate = $cliente['dateBirth'];
            $formated_date= date("d-m-Y", strtotime($birthdate));
            $img = $cliente['foto'];
            $email = $cliente['email'];
        ?>
            <div class="card">
                <div class="card_img">
                    <img src="../img_customers/<?= $img ?>" alt="Foto de <?= $name ?>">
                </div>
                <div class="card_text">
                    <h1>Datos del Cliente:</h1>
                    <p>Nombre: <?= $name ?></p>
                    <p>Apellido: <?= $surname ?></p>
                    <p>Fecha de Nacimiento: <?= $formated_date ?></p>
                    <p>Email: <?= $email ?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </main>
</body>

</html>