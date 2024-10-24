<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datos = [
        "nombre" => htmlspecialchars($_POST['nombre']),
        "apellido" => htmlspecialchars($_POST['apellido']),
        "correo" => htmlspecialchars($_POST['correo']),
        "telefono" => htmlspecialchars($_POST['telefono']),
    ];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Ingresados</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container">
        <h1>Datos Ingresados</h1>
        <p><strong>Nombre:</strong> <?php echo $datos['nombre']; ?></p>
        <p><strong>Apellido:</strong> <?php echo $datos['apellido']; ?></p>
        <p><strong>Correo Electrónico:</strong> <?php echo $datos['correo']; ?></p>
        <p><strong>Número de Teléfono:</strong> <?php echo $datos['telefono']; ?></p>
        <a href="index.php">Volver al formulario</a>
    </div>
</body>
</html>
