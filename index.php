<?php

require 'vendor/autoload.php';

use App\Calculatrice;

$calculatrice = new Calculatrice();

$resultat = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (float) $_POST['nombre1'];
    $b = (float) $_POST['nombre2'];
    $operation = $_POST['operation'];
    $resultat = $calculatrice->calculer($a, $b, $operation);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice PHP avec Composer</title>
</head>
<body>
    <h2>Calculatrice avec Composer</h2>
    <form method="post">
        <input type="number" name="nombre1" step="any" required placeholder="Nombre 1">
        <select name="operation">
            <option value="+">+</option>
            <option value="-">−</option>
            <option value="*">×</option>
            <option value="/">÷</option>
        </select>
        <input type="number" name="nombre2" step="any" required placeholder="Nombre 2">
        <button type="submit">Calculer</button>
    </form>

    <?php if ($resultat !== null): ?>
        <p>Résultat : <strong><?= $resultat ?></strong></p>
    <?php endif; ?>
</body>
</html>
