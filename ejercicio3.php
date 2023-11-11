<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles3.css">
    <title>Formulario de Usuario</title>
</head>
<body>
    <div class="user-form">
        <form action="mostrar_datos.php" method="get">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" required>

            <label for="cedula">Cédula:</label>
            <input type="text" name="cedula" required>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
