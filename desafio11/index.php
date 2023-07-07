<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="../style.css">
</head>
<?php
$valor1 = $_GET["v1"] ?? '0';
$valor2 = $_GET["v2"] ?? '0';

$porcentagem =  $valor1 * ($valor2 / 100);

$precoAumento = $valor1 + $porcentagem;

$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

?>

<body>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Preço do Produto (R$)</label>
            <input type="number" name="v1" id="v1">
            <label for="v2">Qual será o percentual de reajuste? (<strong><span id="porcentagem">0</span>%</strong>)</label>
            <input type="range" value="0" min="0" max="200" name="v2" id="v2" step="1" oninput="mudaPorcentagem()">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
        echo numfmt_format_currency($padrao, $valor1, "BRL")." com um adicional de " .$valor2. "% é igual a: ". numfmt_format_currency($padrao, $precoAumento, "BRL");
        ?>
    </section>
    <script>
        function mudaPorcentagem() {
            porcentagem.innerText = v2.value
        }
    </script>

</body>

</html>