<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="../style.css">
</head>
<?php
$salario = $_GET["salario"] ?? 0;
$salarioMinimo = 1380;
$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

$quantidadeSalarios = $salario / $salarioMinimo;
$restanteSalario = $salario % $salarioMinimo;

?>

<body>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário(R$)</label>
            <input type="number" name="salario" id="salario">
            <p>Considerando o salário mínimo de <?= numfmt_format_currency($padrao,  $salarioMinimo, "BRL") ?></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <?php
        echo "<p>Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha <strong>" .  (int)$quantidadeSalarios . " salários mínimos</strong> + " . numfmt_format_currency($padrao, $restanteSalario, "BRL") . "</p>";
        ?>
    </section>
</body>

</html>