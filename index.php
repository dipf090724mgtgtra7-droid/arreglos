<?php
$numeros = [];
for ($i = 0; $i < 50; $i++) {
    $numeros[] = rand(1, 100);
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
</body>
</html>
