<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 05</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <?php
            $numeroReal = $_GET["numeroRecebido"];
        echo 
        "<p>Analisando o número <strong>" . number_format( $numeroReal, 3, ",", ".") ."</strong> informado pelo usuário:</p>";

        $int = (int) $numeroReal;
        $fra = $numeroReal - $int;

        echo "<ul><li>A parte inteira do número é " . number_format($int, 0, ",", ".") ."</li>";
        echo "<li>A parte fracionária do número é " . number_format($fra, 3, ",", ".") ."</li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>