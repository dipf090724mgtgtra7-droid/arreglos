<?php
if (isset($_POST['numeros_guardados'])) {
    $numeros = explode(",", $_POST['numeros_guardados']);
} else {
    $numeros = [];
    for ($i = 0; $i < 50; $i++) {
        $numeros[] = rand(1, 100);
    }
}

$top3 = [];
if (isset($_POST['mostrar_mayores'])) {
    $copia = $numeros;
    rsort($copia); // Ordena de mayor a menor
    $top3 = array_slice($copia, 0, 3); // Toma los primeros 3
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglo Aleatorio</title>
</head>
<body>
    <h2>50 Números Aleatorios</h2>
    <p><?php echo implode(", ", $numeros); ?></p>

    <form method="POST">
        <input type="hidden" name="numeros_guardados" value="<?php echo implode(",", $numeros); ?>">
        <button type="submit" name="mostrar_mayores">Mostrar los 3 números más grandes</button>
    </form>

    <?php if (!empty($top3)): ?>
        <h3>Los tres números más grandes son:</h3>
        <p><strong><?php echo implode(", ", $top3); ?></strong></p>
    <?php endif; ?>
</body>
</html>

