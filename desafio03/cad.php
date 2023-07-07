<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <?php
        $reais = $_GET["reais"] ?? 0;
        $dolares = $reais / 4.85;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL"). " equivalem a <strong>" .numfmt_format_currency($padrao, $dolares, "USD") ."</strong></p>";
        ?>
        <p><strong>Cotação fixa de 4,85</strong> informada diretamente no código</p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
     </main>
</body>

</html>