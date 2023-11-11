<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Calculadora de Edad</title>
</head>
<body>
    <div class="age-calculator">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener la fecha de nacimiento del formulario
            $fecha_nacimiento = $_POST['fecha_nacimiento'];

            // Calcular la edad
            $fecha_actual = new DateTime();
            $fecha_nacimiento_dt = new DateTime($fecha_nacimiento);
            $edad = $fecha_actual->diff($fecha_nacimiento_dt)->y;

            // Determinar si es mayor o menor de edad
            if ($edad < 18) {
                $mensaje = "Su edad es $edad, por tanto: No es mayor de edad";
            } else {
                $mensaje = "Su edad es $edad, por tanto: Es mayor de edad";
            }
        }
        ?>

        <?php if (isset($mensaje)) : ?>
            <h2>Resultado:</h2>
            <p><?php echo $mensaje; ?></p>
            <a href="index_fecha.html">Volver</a>
        <?php else : ?>
            <form action="calcular_edad.php" method="post">
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" required>
                <input type="submit" value="Calcular Edad">
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
