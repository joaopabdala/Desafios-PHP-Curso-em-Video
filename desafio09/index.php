<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09</title>
    <link rel="stylesheet" href="../style.css">
</head>
<?php
$valor1 = $_GET["v1"] ?? 1;
$peso1 = $_GET["p1"] ?? 1;
$valor2 = $_GET["v2"] ?? 1;
$peso2 = $_GET["p2"] ?? 1;

$mediaSimples = ($valor1 + $valor2) / 2;
$mediaPonderda = (($valor1 * $peso1) + ($valor2 *$peso2)) / ($peso1 + $peso2);


?>

<body>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1">
            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1">
            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2">
            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
        echo "<p>Analisando os valores " . $valor1 ." e ". $valor2 . ", temos:</p>";
        echo "<ul><li>média simples: <strong>" . number_format($mediaSimples, 2, ",", ".") . "</strong></li>";
        echo "<li>média ponderada: <strong>" . number_format($mediaPonderda, 2, ",", ".") . "</strong></li></ul>";
        ?>
    </section>
</body>

</html>