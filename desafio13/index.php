<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 10px;
        }
    </style>
</head>
<?php
$valorRecebido = $_GET["v1"] ?? 0;
$notaCem = $valorRecebido / 100;
$restoNotaCem = $valorRecebido % 100;
$notaCinquenta = $restoNotaCem / 50;
$restoNotaCinquenta = $restoNotaCem % 50;
$notaDez =   $restoNotaCinquenta / 10;
$restoNotaDez =   $restoNotaCinquenta % 10;
$notaCinco = $restoNotaDez / 5;

$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
?>

<body>
    <main>
        <h1>Caixa eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Qual valor deseja sacar? (R$)</label>
            <input type="number" name="v1" id="v1" step="5">
            <p>*Notas disponíveis:
                <?php
                echo numfmt_format_currency($padrao, 100, "BRL") . ", ";
                echo numfmt_format_currency($padrao, 50, "BRL") . ", ";
                echo numfmt_format_currency($padrao, 10, "BRL") . ", ";
                echo numfmt_format_currency($padrao, 5, "BRL");
                ?></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?= number_format($valorRecebido,2, ",", "." )?> realizado.</h2>

        <ul>
            <li><img class="nota" src="./imagens/100-reais.jpg" alt="nota cem 100reais">x<?= (int) $notaCem ?></li>
            <li><img class="nota" src="./imagens/50-reais.jpg" alt="nota 50 reais">x<?= (int) $notaCinquenta ?></li>
            <li><img class="nota" src="./imagens/5-reais.jpg" alt="nota 10 reais">x<?= (int) $notaDez ?></li>
            <li><img class="nota" src="./imagens/5-reais.jpg" alt="nota 5 reais">x<?= (int) $notaCinco ?></li>
        </ul>
    </section>
</body>

</html>