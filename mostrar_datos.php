<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles3.css">
    <title>Datos del Usuario</title>
</head>
<body>
    <div class="user-data">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $cedula = $_GET['cedula'];
        }
        ?>

        <?php if (isset($nombre) && isset($apellido) && isset($cedula)) : ?>
            <h2>Datos del Usuario:</h2>
            <p>Nombre: <?php echo $nombre; ?></p>
            <p>Apellido: <?php echo $apellido; ?></p>
            <p>Cédula: <?php echo $cedula; ?></p>
            <a href="ejercicio3.php">Volver al formulario</a>
        <?php else : ?>
            <p>No se han recibido datos.</p>
        <?php endif; ?>
    </div>
</body>
</html>
