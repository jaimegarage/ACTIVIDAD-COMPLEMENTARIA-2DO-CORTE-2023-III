<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);

    // Crear array asociativo
    $datos = array(
        "Nombre" => $nombre,
        "Apellido" => $apellido,
        "Correo Electrónico" => $email,
        "Teléfono" => $telefono
    );
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #1877f2;
            font-size: 24px;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #f0f2f5;
            border-radius: 6px;
            padding: 10px;
            margin: 5px 0;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Datos Ingresados</h1>
        <ul>
            <li><strong>Nombre:</strong> <?php echo $datos["Nombre"]; ?></li>
            <li><strong>Apellido:</strong> <?php echo $datos["Apellido"]; ?></li>
            <li><strong>Correo Electrónico:</strong> <?php echo $datos["Correo Electrónico"]; ?></li>
            <li><strong>Teléfono:</strong> <?php echo $datos["Teléfono"]; ?></li>
        </ul>
    </div>
</body>
</html>
