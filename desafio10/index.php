<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="../style.css">
</head>
<?php

$anoAtual = date("Y");
$valor1 = $_GET["v1"] ?? 0;
$valor2 = $_GET["v2"] ?? 0;

$resultado = $valor2 - $valor1;

$paragrafoResultado = "<p>Quem nasceu em " . $valor1 ." vai ter <strong>". $resultado  . "</strong> anos em ". $valor2."</p>";

if($resultado < 0){
    $paragrafoResultado = "Você ainda não havia nascido em <strong>$valor2</strong>";
}





?>

<body>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Em que ano você nasceu?</label>
            <input type="number" name="v1" id="v1">
            <label for="v2">Quer saber a sua idade em que ano?(Atualmente estamos em <?= $anoAtual?>).</label>
            <input type="number" name="v2" id="v2">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
        echo $paragrafoResultado;
        ?>
    </section>
</body>

</html>