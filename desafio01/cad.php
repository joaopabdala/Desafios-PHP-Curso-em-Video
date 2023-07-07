<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <?php
        $numeroDigitado = $_GET["numero"] ?? 0;
        $antecessor = $numeroDigitado - 1;
        $sucessor  = $numeroDigitado + 1;

        echo "<p>O número escolhido foi <strong>$numeroDigitado</strong></p>";
        echo "<p>O seu antecessor é $antecessor</p>";
        echo "<p>O sucessor é $sucessor</p>";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>