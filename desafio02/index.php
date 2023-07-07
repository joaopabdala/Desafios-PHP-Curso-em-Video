<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <h1>Números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100</p>
    <?php 
        $numeroAleatorio = mt_rand(0, 100);
        echo "<p>O valor gerado foi <strong>$numeroAleatorio</strong></p>"
    ?>

    <button onclick="javascript:document.location.reload()">Gerar outro número</button>
    </main>
</body>

</html>