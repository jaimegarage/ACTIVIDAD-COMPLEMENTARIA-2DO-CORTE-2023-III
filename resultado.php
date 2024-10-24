<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Datos Ingresados</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nombre = htmlspecialchars($_POST['nombre']);
            $apellido = htmlspecialchars($_POST['apellido']);
            $correo = htmlspecialchars($_POST['correo']);
            $telefono = htmlspecialchars($_POST['telefono']);
        ?>


        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Apellido:</strong> <?php echo $apellido; ?></p>
        <p><strong>Correo Electrónico:</strong> <?php echo $correo; ?></p>
        <p><strong>Número de Teléfono:</strong> <?php echo $telefono; ?></p>


        <a href="index.html"><button>Volver al formulario</button></a>

        <?php
        } else {

            header("Location: index.html");
            exit();
        }
        ?>
    </div>
</body>
</html>
