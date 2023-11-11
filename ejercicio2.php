<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles2.css">
    <title>Verificación de Edad</title>
</head>
<body>
    <div class="age-verification">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $age = $_POST['age'];

            if ($age < 18) {
                $message = "No es mayor de edad";
            } else {
                $message = "Es mayor de edad";
            }
        }
        ?>

        <?php if (isset($message)) : ?>
            <h2>Resultado:</h2>
            <p><?php echo $message; ?></p>
            <a href="ejercicio2.php">Volver</a>
        <?php else : ?>
            <form action="ejercicio2.php" method="post">
                <label for="age">Edad:</label>
                <input type="number" name="age" required>
                <input type="submit" value="Verificar">
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
