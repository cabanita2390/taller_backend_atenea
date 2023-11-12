<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Calculadora</title>
</head>
<body>
    <div class="container">
        <h2>Calculadora</h2>
        <form action="ejercicio1.php" method="post">
            <label for="numero1">Número 1:</label>
            <input type="number" name="numero1" required>

            <label for="numero2">Número 2:</label>
            <input type="number" name="numero2" required>

            <label for="operacion">Operación:</label>
            <select name="operacion" required>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">División</option>
            </select>

            <button type="submit">Operar</button>
        </form>
    </div>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los valores del formulario
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacion = $_POST["operacion"];

    // Realizar la operación seleccionada
    switch ($operacion) {
        case "suma":
            $resultado = $numero1 + $numero2;
            break;
        case "resta":
            $resultado = $numero1 - $numero2;
            break;
        case "multiplicacion":
            $resultado = $numero1 * $numero2;
            break;
        case "division":
            // Manejar la división por cero
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = "Error: División por cero";
            }
            break;
        default:
            $resultado = "Operación no válida";
    }

    // Mostrar el resultado
    echo "El resultado de la $operacion es: $resultado";
}
?>

</body>
</html>
