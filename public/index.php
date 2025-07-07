<?php

use App\Calculatrice;

require_once __DIR__ . '/../vendor/autoload.php';

$resultat = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre1 = (float) $_POST['nombre1'];
    $nombre2 = (float) $_POST['nombre2'];
    $operation = $_POST['operation'];

    $calculatrice = new Calculatrice();
    $resultat = $calculatrice->calculer($nombre1, $nombre2, $operation);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <form method="post">
        <input type="number" name="nombre1" step="any" required>
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="nombre2" step="any" required>
        <button type="submit">Calculer</button>
    </form>

    <?php if ($resultat !== ''): ?>
        <p>Résultat : <?= htmlspecialchars((string)$resultat) ?></p>
    <?php endif; ?>
</body>
</html>
